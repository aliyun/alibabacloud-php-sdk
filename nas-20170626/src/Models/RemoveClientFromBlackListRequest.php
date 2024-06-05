<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class RemoveClientFromBlackListRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 192.168.0.0
     *
     * @var string
     */
    public $clientIP;

    /**
     * @description This parameter is required.
     *
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example cpfs-00d91ca404a348****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The ID of the request.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientIP'     => 'ClientIP',
        'clientToken'  => 'ClientToken',
        'fileSystemId' => 'FileSystemId',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveClientFromBlackListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
