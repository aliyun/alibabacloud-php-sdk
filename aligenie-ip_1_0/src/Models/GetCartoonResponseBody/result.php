<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\GetCartoonResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $startVideoMd5;

    /**
     * @var string
     */
    public $startVideoUrl;
    protected $_name = [
        'startVideoMd5' => 'StartVideoMd5',
        'startVideoUrl' => 'StartVideoUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->startVideoMd5) {
            $res['StartVideoMd5'] = $this->startVideoMd5;
        }

        if (null !== $this->startVideoUrl) {
            $res['StartVideoUrl'] = $this->startVideoUrl;
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
        if (isset($map['StartVideoMd5'])) {
            $model->startVideoMd5 = $map['StartVideoMd5'];
        }

        if (isset($map['StartVideoUrl'])) {
            $model->startVideoUrl = $map['StartVideoUrl'];
        }

        return $model;
    }
}
