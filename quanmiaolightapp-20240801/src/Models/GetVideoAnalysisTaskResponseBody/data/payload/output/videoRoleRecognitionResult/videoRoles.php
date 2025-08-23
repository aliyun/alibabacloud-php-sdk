<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoRoleRecognitionResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoRoleRecognitionResult\videoRoles\timeIntervals;

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

    public function validate()
    {
        if (\is_array($this->timeIntervals)) {
            Model::validateArray($this->timeIntervals);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->timeIntervals)) {
                $res['timeIntervals'] = [];
                $n1 = 0;
                foreach ($this->timeIntervals as $item1) {
                    $res['timeIntervals'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['timeIntervals'] as $item1) {
                    $model->timeIntervals[$n1] = timeIntervals::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
