<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoRoleRecognitionResult\videoRoles;

class videoRoleRecognitionResult extends Model
{
    /**
     * @var videoRoles[]
     */
    public $videoRoles;
    protected $_name = [
        'videoRoles' => 'videoRoles',
    ];

    public function validate()
    {
        if (\is_array($this->videoRoles)) {
            Model::validateArray($this->videoRoles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoRoles) {
            if (\is_array($this->videoRoles)) {
                $res['videoRoles'] = [];
                $n1 = 0;
                foreach ($this->videoRoles as $item1) {
                    $res['videoRoles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['videoRoles'])) {
            if (!empty($map['videoRoles'])) {
                $model->videoRoles = [];
                $n1 = 0;
                foreach ($map['videoRoles'] as $item1) {
                    $model->videoRoles[$n1] = videoRoles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
