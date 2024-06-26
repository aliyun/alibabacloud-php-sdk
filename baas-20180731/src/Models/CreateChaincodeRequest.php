<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class CreateChaincodeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example chan-first-channel-1w55v3u39x2xz
     *
     * @var string
     */
    public $channelId;

    /**
     * @example consortium-aaaaaa-akpcsjjac2jd
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example OR (\\"aaaaaa1MSP.peer\\")
     *
     * @var string
     */
    public $endorsePolicy;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $location;

    /**
     * @description This parameter is required.
     *
     * @example peers-aaaaaa1-1oxw31d046jtl
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description This parameter is required.
     *
     * @example https://chaincode.oss-cn-beijing.aliyuncs.com
     *
     * @var string
     */
    public $ossBucket;

    /**
     * @description This parameter is required.
     *
     * @example aaaaaa1/a0cf8729-7d47-44c9-9ed5-6d2fdfc8dc2c/sacc.cc
     *
     * @var string
     */
    public $ossUrl;
    protected $_name = [
        'channelId'      => 'ChannelId',
        'consortiumId'   => 'ConsortiumId',
        'endorsePolicy'  => 'EndorsePolicy',
        'location'       => 'Location',
        'organizationId' => 'OrganizationId',
        'ossBucket'      => 'OssBucket',
        'ossUrl'         => 'OssUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelId) {
            $res['ChannelId'] = $this->channelId;
        }
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->endorsePolicy) {
            $res['EndorsePolicy'] = $this->endorsePolicy;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossUrl) {
            $res['OssUrl'] = $this->ossUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChaincodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelId'])) {
            $model->channelId = $map['ChannelId'];
        }
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['EndorsePolicy'])) {
            $model->endorsePolicy = $map['EndorsePolicy'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssUrl'])) {
            $model->ossUrl = $map['OssUrl'];
        }

        return $model;
    }
}
