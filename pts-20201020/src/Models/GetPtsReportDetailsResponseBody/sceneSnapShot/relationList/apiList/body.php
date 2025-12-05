<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\relationList\apiList;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $bodyValue;

    /**
     * @var string
     */
    public $contentType;
    protected $_name = [
        'bodyValue' => 'BodyValue',
        'contentType' => 'ContentType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bodyValue) {
            $res['BodyValue'] = $this->bodyValue;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
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
        if (isset($map['BodyValue'])) {
            $model->bodyValue = $map['BodyValue'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        return $model;
    }
}
