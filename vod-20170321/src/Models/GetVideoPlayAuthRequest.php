<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class GetVideoPlayAuthRequest extends Model
{
    /**
     * @var string
     */
    public $videoId;

    /**
     * @var int
     */
    public $authInfoTimeout;

    /**
     * @var string
     */
    public $reAuthInfo;

    /**
     * @var string
     */
    public $playConfig;
    protected $_name = [
        'videoId'         => 'VideoId',
        'authInfoTimeout' => 'AuthInfoTimeout',
        'reAuthInfo'      => 'ReAuthInfo',
        'playConfig'      => 'PlayConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->authInfoTimeout) {
            $res['AuthInfoTimeout'] = $this->authInfoTimeout;
        }
        if (null !== $this->reAuthInfo) {
            $res['ReAuthInfo'] = $this->reAuthInfo;
        }
        if (null !== $this->playConfig) {
            $res['PlayConfig'] = $this->playConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVideoPlayAuthRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['AuthInfoTimeout'])) {
            $model->authInfoTimeout = $map['AuthInfoTimeout'];
        }
        if (isset($map['ReAuthInfo'])) {
            $model->reAuthInfo = $map['ReAuthInfo'];
        }
        if (isset($map['PlayConfig'])) {
            $model->playConfig = $map['PlayConfig'];
        }

        return $model;
    }
}
