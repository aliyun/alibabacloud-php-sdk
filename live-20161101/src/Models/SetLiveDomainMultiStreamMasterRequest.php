<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveDomainMultiStreamMasterRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs.
     *
     * This parameter is required.
     *
     * @example testapp
     *
     * @var string
     */
    public $appName;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.aliyundoc.com
     *
     * @var string
     */
    public $domain;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The name of the live stream.
     *
     * This parameter is required.
     *
     * @example teststream
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The unique identifier of the stream ingest.
     *
     * This parameter is required.
     *
     * @example teststream_***
     *
     * @var string
     */
    public $upstreamSequence;
    protected $_name = [
        'appName' => 'AppName',
        'domain' => 'Domain',
        'ownerId' => 'OwnerId',
        'streamName' => 'StreamName',
        'upstreamSequence' => 'UpstreamSequence',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->upstreamSequence) {
            $res['UpstreamSequence'] = $this->upstreamSequence;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLiveDomainMultiStreamMasterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['UpstreamSequence'])) {
            $model->upstreamSequence = $map['UpstreamSequence'];
        }

        return $model;
    }
}
