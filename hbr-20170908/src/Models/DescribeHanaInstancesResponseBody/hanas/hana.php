<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaInstancesResponseBody\hanas;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaInstancesResponseBody\hanas\hana\tags;

class hana extends Model
{
    /**
     * @var string
     */
    public $alertSetting;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $crossAccountRoleName;
    /**
     * @var string
     */
    public $crossAccountType;
    /**
     * @var int
     */
    public $crossAccountUserId;
    /**
     * @var string
     */
    public $hanaName;
    /**
     * @var string
     */
    public $host;
    /**
     * @var int
     */
    public $instanceNumber;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $statusMessage;
    /**
     * @var tags
     */
    public $tags;
    /**
     * @var bool
     */
    public $useSsl;
    /**
     * @var string
     */
    public $userName;
    /**
     * @var bool
     */
    public $validateCertificate;
    /**
     * @var string
     */
    public $vaultId;
    protected $_name = [
        'alertSetting'         => 'AlertSetting',
        'clusterId'            => 'ClusterId',
        'crossAccountRoleName' => 'CrossAccountRoleName',
        'crossAccountType'     => 'CrossAccountType',
        'crossAccountUserId'   => 'CrossAccountUserId',
        'hanaName'             => 'HanaName',
        'host'                 => 'Host',
        'instanceNumber'       => 'InstanceNumber',
        'resourceGroupId'      => 'ResourceGroupId',
        'status'               => 'Status',
        'statusMessage'        => 'StatusMessage',
        'tags'                 => 'Tags',
        'useSsl'               => 'UseSsl',
        'userName'             => 'UserName',
        'validateCertificate'  => 'ValidateCertificate',
        'vaultId'              => 'VaultId',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertSetting) {
            $res['AlertSetting'] = $this->alertSetting;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->crossAccountRoleName) {
            $res['CrossAccountRoleName'] = $this->crossAccountRoleName;
        }

        if (null !== $this->crossAccountType) {
            $res['CrossAccountType'] = $this->crossAccountType;
        }

        if (null !== $this->crossAccountUserId) {
            $res['CrossAccountUserId'] = $this->crossAccountUserId;
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
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertSetting'])) {
            $model->alertSetting = $map['AlertSetting'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CrossAccountRoleName'])) {
            $model->crossAccountRoleName = $map['CrossAccountRoleName'];
        }

        if (isset($map['CrossAccountType'])) {
            $model->crossAccountType = $map['CrossAccountType'];
        }

        if (isset($map['CrossAccountUserId'])) {
            $model->crossAccountUserId = $map['CrossAccountUserId'];
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
