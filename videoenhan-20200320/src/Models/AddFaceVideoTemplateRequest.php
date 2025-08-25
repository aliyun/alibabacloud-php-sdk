<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\Dara\Model;

class AddFaceVideoTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $videoScene;

    /**
     * @var string
     */
    public $videoURL;
    protected $_name = [
        'videoScene' => 'VideoScene',
        'videoURL' => 'VideoURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->videoScene) {
            $res['VideoScene'] = $this->videoScene;
        }

        if (null !== $this->videoURL) {
            $res['VideoURL'] = $this->videoURL;
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
        if (isset($map['VideoScene'])) {
            $model->videoScene = $map['VideoScene'];
        }

        if (isset($map['VideoURL'])) {
            $model->videoURL = $map['VideoURL'];
        }

        return $model;
    }
}
