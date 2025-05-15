<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\SubmitVideoAnalysisTaskRequest\videoCaptionInfo\videoCaptions;

class videoCaptionInfo extends Model
{
    /**
     * @var videoCaptions[]
     */
    public $videoCaptions;
    protected $_name = [
        'videoCaptions' => 'videoCaptions',
    ];

    public function validate()
    {
        if (\is_array($this->videoCaptions)) {
            Model::validateArray($this->videoCaptions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoCaptions) {
            if (\is_array($this->videoCaptions)) {
                $res['videoCaptions'] = [];
                $n1 = 0;
                foreach ($this->videoCaptions as $item1) {
                    $res['videoCaptions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['videoCaptions'])) {
            if (!empty($map['videoCaptions'])) {
                $model->videoCaptions = [];
                $n1 = 0;
                foreach ($map['videoCaptions'] as $item1) {
                    $model->videoCaptions[$n1++] = videoCaptions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
