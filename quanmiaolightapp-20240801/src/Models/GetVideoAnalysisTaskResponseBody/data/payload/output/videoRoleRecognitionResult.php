<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoRoleRecognitionResult\videoRoles;
use AlibabaCloud\Tea\Model;

class videoRoleRecognitionResult extends Model
{
    /**
     * @var videoRoles[]
     */
    public $videoRoles;
    protected $_name = [
        'videoRoles' => 'videoRoles',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoRoles) {
            $res['videoRoles'] = [];
            if (null !== $this->videoRoles && \is_array($this->videoRoles)) {
                $n = 0;
                foreach ($this->videoRoles as $item) {
                    $res['videoRoles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoRoleRecognitionResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['videoRoles'])) {
            if (!empty($map['videoRoles'])) {
                $model->videoRoles = [];
                $n = 0;
                foreach ($map['videoRoles'] as $item) {
                    $model->videoRoles[$n++] = null !== $item ? videoRoles::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
