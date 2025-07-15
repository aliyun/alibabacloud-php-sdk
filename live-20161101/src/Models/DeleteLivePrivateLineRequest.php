<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLivePrivateLineRequest extends Model
{
    /**
     * @description The acceleration type. Valid values:
     *
     *   play: streaming acceleration
     *   publish: stream ingest acceleration
     *
     * This parameter is required.
     *
     * @example play
     *
     * @var string
     */
    public $accelerationType;

    /**
     * @description The name of the application.
     *
     * This parameter is required.
     *
     * @example live
     *
     * @var string
     */
    public $appName;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example demo.aliyundoc.com
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
     * @description The name of the live stream.
     *
     * This parameter is required.
     *
     * @example testStream
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'accelerationType' => 'AccelerationType',
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
        if (null !== $this->accelerationType) {
            $res['AccelerationType'] = $this->accelerationType;
        }
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
     * @return DeleteLivePrivateLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerationType'])) {
            $model->accelerationType = $map['AccelerationType'];
        }
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
