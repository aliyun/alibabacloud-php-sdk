<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaInstancesResponseBody\hanas;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaInstancesResponseBody\hanas\hana\tags;
use AlibabaCloud\Tea\Model;

class hana extends Model
{
    /**
     * @description The alert settings. Valid value: INHERITED, which indicates that the backup client sends alert notifications in the same way as the backup vault.
     *
     * @example INHERITED
     *
     * @var string
     */
    public $alertSetting;

    /**
     * @description The ID of the SAP HANA instance.
     *
     * @example cl-0004cf6g6******0yd7y
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the SAP HANA instance.
     *
     * @example HANA-DEV
     *
     * @var string
     */
    public $hanaName;

    /**
     * @description The private or internal IP address of the host where the primary node of the SAP HANA instance resides.
     *
     * @example 47.100.XX.XX
     *
     * @var string
     */
    public $host;

    /**
     * @description The instance number of the SAP HANA system.
     *
     * @example 00
     *
     * @var int
     */
    public $instanceNumber;

    /**
     * @description The ID of resource group.
     *
     * @example rg-acfmvnf22m7itha
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The status of the SAP HANA instance. Valid values:
     *
     *   INITIALIZING: The instance is being initialized.
     *   INITIALIZED: The instance is registered.
     *   INVALID_HANA_NODE: The instance is invalid.
     *   INITIALIZE_FAILED: The client fails to be installed on the instance.
     *
     * @example INITIALIZED
     *
     * @var int
     */
    public $status;

    /**
     * @description The status information.
     *
     * @example INSTALL_CLIENT_FAILED
     *
     * @var string
     */
    public $statusMessage;

    /**
     * @description The tags of the SAP HANA instance.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description Indicates whether the SAP HANA instance is connected over Secure Sockets Layer (SSL). Valid values:
     *
     *   true: The SAP HANA instance is connected over SSL.
     *   false: The SAP HANA instance is not connected over SSL.
     *
     * @example true
     *
     * @var bool
     */
    public $useSsl;

    /**
     * @description The username of the SYSTEMDB database.
     *
     * @example admin
     *
     * @var string
     */
    public $userName;

    /**
     * @description Indicates whether the SSL certificate of the SAP HANA instance is verified.
     *
     * @example false
     *
     * @var bool
     */
    public $validateCertificate;

    /**
     * @description The ID of the backup vault.
     *
     * @example v-0000s974******1hl
     *
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'alertSetting'        => 'AlertSetting',
        'clusterId'           => 'ClusterId',
        'hanaName'            => 'HanaName',
        'host'                => 'Host',
        'instanceNumber'      => 'InstanceNumber',
        'resourceGroupId'     => 'ResourceGroupId',
        'status'              => 'Status',
        'statusMessage'       => 'StatusMessage',
        'tags'                => 'Tags',
        'useSsl'              => 'UseSsl',
        'userName'            => 'UserName',
        'validateCertificate' => 'ValidateCertificate',
        'vaultId'             => 'VaultId',
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->hanaName) {
            $res['HanaName'] = $this->hanaName;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->instanceNumber) {
            $res['InstanceNumber'] = $this->instanceNumber;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
        }
        if (null !== $this->useSsl) {
            $res['UseSsl'] = $this->useSsl;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->validateCertificate) {
            $res['ValidateCertificate'] = $this->validateCertificate;
        }
        if (null !== $this->vaultId) {
            $res['VaultId'] = $this->vaultId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hana
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertSetting'])) {
            $model->alertSetting = $map['AlertSetting'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HanaName'])) {
            $model->hanaName = $map['HanaName'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['InstanceNumber'])) {
            $model->instanceNumber = $map['InstanceNumber'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }
        if (isset($map['UseSsl'])) {
            $model->useSsl = $map['UseSsl'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['ValidateCertificate'])) {
            $model->validateCertificate = $map['ValidateCertificate'];
        }
        if (isset($map['VaultId'])) {
            $model->vaultId = $map['VaultId'];
        }

        return $model;
    }
}
