<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest\videoRoles\timeIntervals;

class videoRoles extends Model
{
    /**
     * @var bool
     */
    public $isAutoRecognition;

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

    /**
     * @var string[]
     */
    public $urls;
    protected $_name = [
        'isAutoRecognition' => 'isAutoRecognition',
        'roleInfo' => 'roleInfo',
        'roleName' => 'roleName',
        'timeIntervals' => 'timeIntervals',
        'urls' => 'urls',
    ];

    public function validate()
    {
        if (\is_array($this->timeIntervals)) {
            Model::validateArray($this->timeIntervals);
        }
        if (\is_array($this->urls)) {
            Model::validateArray($this->urls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isAutoRecognition) {
            $res['isAutoRecognition'] = $this->isAutoRecognition;
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

        if (null !== $this->urls) {
            if (\is_array($this->urls)) {
                $res['urls'] = [];
                $n1 = 0;
                foreach ($this->urls as $item1) {
                    $res['urls'][$n1] = $item1;
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

        if (isset($map['urls'])) {
            if (!empty($map['urls'])) {
                $model->urls = [];
                $n1 = 0;
                foreach ($map['urls'] as $item1) {
                    $model->urls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
