<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetVideoPlayAuthRequest extends Model
{
    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var int
     */
    public $authInfoTimeout;

    /**
     * @var string
     */
    public $referenceId;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'apiVersion' => 'ApiVersion',
        'authInfoTimeout' => 'AuthInfoTimeout',
        'referenceId' => 'ReferenceId',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }

        if (null !== $this->authInfoTimeout) {
            $res['AuthInfoTimeout'] = $this->authInfoTimeout;
        }

        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
        }

        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
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
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }

        if (isset($map['AuthInfoTimeout'])) {
            $model->authInfoTimeout = $map['AuthInfoTimeout'];
        }

        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
        }

        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
