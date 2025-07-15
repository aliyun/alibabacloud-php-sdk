<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveDelayConfigRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs. You can specify an asterisk (\\*) as the value to match all applications that belong to the domain name.
     *
     * This parameter is required.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $app;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the live stream. You can use the wildcard (\\*) to specify all streams of the application.
     *
     * This parameter is required.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $stream;
    protected $_name = [
        'app' => 'App',
        'domain' => 'Domain',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'stream' => 'Stream',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stream) {
            $res['Stream'] = $this->stream;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveDelayConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Stream'])) {
            $model->stream = $map['Stream'];
        }

        return $model;
    }
}
