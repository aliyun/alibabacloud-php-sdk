<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class ExpandCacheDiskRequest extends Model
{
    /**
     * @example gw-000eg44nmxbsfwbvq***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @example /dev/vdb
     *
     * @var string
     */
    public $localFilePath;

    /**
     * @example 101
     *
     * @var int
     */
    public $newSizeInGB;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'gatewayId'     => 'GatewayId',
        'localFilePath' => 'LocalFilePath',
        'newSizeInGB'   => 'NewSizeInGB',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->localFilePath) {
            $res['LocalFilePath'] = $this->localFilePath;
        }
        if (null !== $this->newSizeInGB) {
            $res['NewSizeInGB'] = $this->newSizeInGB;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExpandCacheDiskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['LocalFilePath'])) {
            $model->localFilePath = $map['LocalFilePath'];
        }
        if (isset($map['NewSizeInGB'])) {
            $model->newSizeInGB = $map['NewSizeInGB'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
