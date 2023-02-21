<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class DeleteWirelessCloudConnectorGroupRequest extends Model
{
    /**
     * @example TF-******-1633255280-43c94bf7-2dd3-4c14-8
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example cc5gg-****
     *
     * @var string
     */
    public $wirelessCloudConnectorGroupId;
    protected $_name = [
        'clientToken'                   => 'ClientToken',
        'dryRun'                        => 'DryRun',
        'wirelessCloudConnectorGroupId' => 'WirelessCloudConnectorGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->wirelessCloudConnectorGroupId) {
            $res['WirelessCloudConnectorGroupId'] = $this->wirelessCloudConnectorGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteWirelessCloudConnectorGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['WirelessCloudConnectorGroupId'])) {
            $model->wirelessCloudConnectorGroupId = $map['WirelessCloudConnectorGroupId'];
        }

        return $model;
    }
}
