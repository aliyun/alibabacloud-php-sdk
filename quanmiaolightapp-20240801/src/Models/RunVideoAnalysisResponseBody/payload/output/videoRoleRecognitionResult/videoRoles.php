<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoRoleRecognitionResult;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunVideoAnalysisResponseBody\payload\output\videoRoleRecognitionResult\videoRoles\timeIntervals;
use AlibabaCloud\Tea\Model;

class videoRoles extends Model
{
    /**
     * @var bool
     */
    public $isAutoRecognition;

    /**
     * @var float
     */
    public $ratio;

    /**
     * @var string
     */
    public $roleInfo;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var timeIntervals[]
     */
    public $timeIntervals;
    protected $_name = [
        'isAutoRecognition' => 'isAutoRecognition',
        'ratio' => 'ratio',
        'roleInfo' => 'roleInfo',
        'roleName' => 'roleName',
        'timeIntervals' => 'timeIntervals',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->isAutoRecognition) {
            $res['isAutoRecognition'] = $this->isAutoRecognition;
        }
        if (null !== $this->ratio) {
            $res['ratio'] = $this->ratio;
        }
        if (null !== $this->roleInfo) {
            $res['roleInfo'] = $this->roleInfo;
        }
        if (null !== $this->roleName) {
            $res['roleName'] = $this->roleName;
        }
        if (null !== $this->timeIntervals) {
            $res['timeIntervals'] = [];
            if (null !== $this->timeIntervals && \is_array($this->timeIntervals)) {
                $n = 0;
                foreach ($this->timeIntervals as $item) {
                    $res['timeIntervals'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoRoles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['isAutoRecognition'])) {
            $model->isAutoRecognition = $map['isAutoRecognition'];
        }
        if (isset($map['ratio'])) {
            $model->ratio = $map['ratio'];
        }
        if (isset($map['roleInfo'])) {
            $model->roleInfo = $map['roleInfo'];
        }
        if (isset($map['roleName'])) {
            $model->roleName = $map['roleName'];
        }
        if (isset($map['timeIntervals'])) {
            if (!empty($map['timeIntervals'])) {
                $model->timeIntervals = [];
                $n = 0;
                foreach ($map['timeIntervals'] as $item) {
                    $model->timeIntervals[$n++] = null !== $item ? timeIntervals::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
