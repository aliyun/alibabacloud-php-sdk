<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CreateCloudAccountRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $cloudAccountExternalId;

    /**
     * @var string
     */
    public $cloudAccountName;

    /**
     * @var string
     */
    public $cloudAccountProviderName;

    /**
     * @var string
     */
    public $cloudAccountVendorType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'cloudAccountExternalId' => 'CloudAccountExternalId',
        'cloudAccountName' => 'CloudAccountName',
        'cloudAccountProviderName' => 'CloudAccountProviderName',
        'cloudAccountVendorType' => 'CloudAccountVendorType',
        'description' => 'Description',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->cloudAccountExternalId) {
            $res['CloudAccountExternalId'] = $this->cloudAccountExternalId;
        }

        if (null !== $this->cloudAccountName) {
            $res['CloudAccountName'] = $this->cloudAccountName;
        }

        if (null !== $this->cloudAccountProviderName) {
            $res['CloudAccountProviderName'] = $this->cloudAccountProviderName;
        }

        if (null !== $this->cloudAccountVendorType) {
            $res['CloudAccountVendorType'] = $this->cloudAccountVendorType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['CloudAccountExternalId'])) {
            $model->cloudAccountExternalId = $map['CloudAccountExternalId'];
        }

        if (isset($map['CloudAccountName'])) {
            $model->cloudAccountName = $map['CloudAccountName'];
        }

        if (isset($map['CloudAccountProviderName'])) {
            $model->cloudAccountProviderName = $map['CloudAccountProviderName'];
        }

        if (isset($map['CloudAccountVendorType'])) {
            $model->cloudAccountVendorType = $map['CloudAccountVendorType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
