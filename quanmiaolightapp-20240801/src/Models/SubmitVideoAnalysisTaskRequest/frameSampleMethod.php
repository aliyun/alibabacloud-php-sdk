<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest;

use AlibabaCloud\Tea\Model;

class frameSampleMethod extends Model
{
    /**
     * @example 2
     *
     * @var float
     */
    public $interval;

    /**
     * @example standard
     *
     * @var string
     */
    public $methodName;

    /**
     * @example 768
     *
     * @var int
     */
    public $pixel;
    protected $_name = [
        'interval' => 'interval',
        'methodName' => 'methodName',
        'pixel' => 'pixel',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->interval) {
            $res['interval'] = $this->interval;
        }
        if (null !== $this->methodName) {
            $res['methodName'] = $this->methodName;
        }
        if (null !== $this->pixel) {
            $res['pixel'] = $this->pixel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frameSampleMethod
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['interval'])) {
            $model->interval = $map['interval'];
        }
        if (isset($map['methodName'])) {
            $model->methodName = $map['methodName'];
        }
        if (isset($map['pixel'])) {
            $model->pixel = $map['pixel'];
        }

        return $model;
    }
}
