<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class CreateClientsRequest extends Model
{
    /**
     * @description The alert settings. Valid value: INHERITED, which indicates that the HBR client sends alert notifications by using the same method configured for the backup vault.
     *
     * @example INHERITED
     *
     * @var string
     */
    public $alertSetting;

    /**
     * @description The installation information of the HBR clients.
     *
     * @example [  {    "instanceId": "i-bp116lr******te9q2",    "accessKeyId": "",    "accessKeySecret": "",    "clusterId": "cl-000csy09q******9rfz9",    "sourceTypes": [      "HANA"    ]  },  {    "instanceId": "i-bp116lrux******hte9q4",    "accessKeyId": "",    "accessKeySecret": "",    "clusterId": "cl-000csy09q5094vw9rfz9",    "sourceTypes": [      "HANA"    ]  }]
     *
     * @var string
     */
    public $clientInfo;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzvx7d3c4kpny
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Specifies whether to transmit data over HTTPS. Valid values:
     *
     *   true: transmits data over HTTPS.
     *   false: transmits data over HTTP.
     *
     * @example false
     *
     * @var bool
     */
    public $useHttps;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-0001ufe******kgm
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'alertSetting'    => 'AlertSetting',
        'clientInfo'      => 'ClientInfo',
        'resourceGroupId' => 'ResourceGroupId',
        'useHttps'        => 'UseHttps',
        'vaultId'         => 'VaultId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertSetting) {
            $res['AlertSetting'] = $this->alertSetting;
        }
        if (null !== $this->clientInfo) {
            $res['ClientInfo'] = $this->clientInfo;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->useHttps) {
            $res['UseHttps'] = $this->useHttps;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClientsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertSetting'])) {
            $model->alertSetting = $map['AlertSetting'];
        }
        if (isset($map['ClientInfo'])) {
            $model->clientInfo = $map['ClientInfo'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['UseHttps'])) {
            $model->useHttps = $map['UseHttps'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
