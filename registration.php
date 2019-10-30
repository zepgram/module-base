<?php
/**
 * This file is part of Zepgram\Base
 *
 * @package    Zepgram\Base
 * @file       registration.php
 * @date       21 07 2019 15:48
 *
 * @author     Benjamin Calef <zepgram@gmail.com>
 * @copyright  2019 Zepgram Copyright (c) (https://github.com/zepgram)
 * @license    MIT License
 */

\Magento\Framework\Component\ComponentRegistrar::register(
    \Magento\Framework\Component\ComponentRegistrar::MODULE,
    'Zepgram_Base',
    __DIR__
);
