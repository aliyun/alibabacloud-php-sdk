<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest\videoRoles\timeIntervals;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
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
            $res['timeIntervals'] = [];
            if (null !== $this->timeIntervals && \is_array($this->timeIntervals)) {
                $n = 0;
                foreach ($this->timeIntervals as $item) {
                    $res['timeIntervals'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->urls) {
            $res['urls'] = $this->urls;
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
        if (isset($map['urls'])) {
            if (!empty($map['urls'])) {
                $model->urls = $map['urls'];
            }
        }

        return $model;
    }
}
