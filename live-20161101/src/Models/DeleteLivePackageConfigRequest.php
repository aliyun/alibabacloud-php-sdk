<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLivePackageConfigRequest extends Model
{
    /**
     * @description App name, `*` matches all names.
     *
     * This parameter is required.
     *
     * @example AppName
     *
     * @var string
     */
    public $appName;

    /**
     * @description Live streaming domain (primary playback domain).
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description Live stream name, `*` matches all streams under AppName.
     *
     * This parameter is required.
     *
     * @example StreamName
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'streamName' => 'StreamName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLivePackageConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
