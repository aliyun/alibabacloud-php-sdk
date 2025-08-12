<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAudioAuditConfigResponseBody\liveAudioAuditConfigList\liveAudioAuditConfig;

use AlibabaCloud\Dara\Model;

class scenes extends Model
{
    /**
     * @var string[]
     */
    public $scene;
    protected $_name = [
        'scene' => 'scene',
    ];

    public function validate()
    {
        if (\is_array($this->scene)) {
            Model::validateArray($this->scene);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->scene) {
            if (\is_array($this->scene)) {
                $res['scene'] = [];
                $n1 = 0;
                foreach ($this->scene as $item1) {
                    $res['scene'][$n1] = $item1;
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
        if (isset($map['scene'])) {
            if (!empty($map['scene'])) {
                $model->scene = [];
                $n1 = 0;
                foreach ($map['scene'] as $item1) {
                    $model->scene[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
