<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class GetPlayInfoRequest extends Model
{
    /**
     * @var int
     */
    public $authTimeout;

    /**
     * @var string
     */
    public $inputURL;

    /**
     * @var string
     */
    public $mediaId;
    protected $_name = [
        'authTimeout' => 'AuthTimeout',
        'inputURL' => 'InputURL',
        'mediaId' => 'MediaId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authTimeout) {
            $res['AuthTimeout'] = $this->authTimeout;
        }

        if (null !== $this->inputURL) {
            $res['InputURL'] = $this->inputURL;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
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
        if (isset($map['AuthTimeout'])) {
            $model->authTimeout = $map['AuthTimeout'];
        }

        if (isset($map['InputURL'])) {
            $model->inputURL = $map['InputURL'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        return $model;
    }
}
