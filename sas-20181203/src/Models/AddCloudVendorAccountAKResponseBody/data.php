<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\AddCloudVendorAccountAKResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\AddCloudVendorAccountAKResponseBody\data\authModules;

class data extends Model
{
    /**
     * @var string
     */
    public $akType;

    /**
     * @var int
     */
    public $authId;

    /**
     * @var authModules[]
     */
    public $authModules;

    /**
     * @var string
     */
    public $ctdrCloudUserId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $secretId;

    /**
     * @var int
     */
    public $serviceStatus;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $vendor;

    /**
     * @var string
     */
    public $vendorAuthAlias;
    protected $_name = [
        'akType' => 'AkType',
        'authId' => 'AuthId',
        'authModules' => 'AuthModules',
        'ctdrCloudUserId' => 'CtdrCloudUserId',
        'message' => 'Message',
        'secretId' => 'SecretId',
        'serviceStatus' => 'ServiceStatus',
        'status' => 'Status',
        'vendor' => 'Vendor',
        'vendorAuthAlias' => 'VendorAuthAlias',
    ];

    public function validate()
    {
        if (\is_array($this->authModules)) {
            Model::validateArray($this->authModules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->akType) {
            $res['AkType'] = $this->akType;
        }

        if (null !== $this->authId) {
            $res['AuthId'] = $this->authId;
        }

        if (null !== $this->authModules) {
            if (\is_array($this->authModules)) {
                $res['AuthModules'] = [];
                $n1 = 0;
                foreach ($this->authModules as $item1) {
                    $res['AuthModules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ctdrCloudUserId) {
            $res['CtdrCloudUserId'] = $this->ctdrCloudUserId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }

        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        if (null !== $this->vendorAuthAlias) {
            $res['VendorAuthAlias'] = $this->vendorAuthAlias;
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
        if (isset($map['AkType'])) {
            $model->akType = $map['AkType'];
        }

        if (isset($map['AuthId'])) {
            $model->authId = $map['AuthId'];
        }

        if (isset($map['AuthModules'])) {
            if (!empty($map['AuthModules'])) {
                $model->authModules = [];
                $n1 = 0;
                foreach ($map['AuthModules'] as $item1) {
                    $model->authModules[$n1] = authModules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CtdrCloudUserId'])) {
            $model->ctdrCloudUserId = $map['CtdrCloudUserId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }

        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        if (isset($map['VendorAuthAlias'])) {
            $model->vendorAuthAlias = $map['VendorAuthAlias'];
        }

        return $model;
    }
}
