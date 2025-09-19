<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ModifyCloudVendorAccountAKRequest extends Model
{
    /**
     * @var string
     */
    public $authIds;

    /**
     * @var string[]
     */
    public $authModules;

    /**
     * @var string
     */
    public $ctdrCloudUserId;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string[]
     */
    public $regions;

    /**
     * @var string
     */
    public $secretId;

    /**
     * @var string
     */
    public $secretKey;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string[]
     */
    public $subscriptionIds;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $vendorAuthAlias;
    protected $_name = [
        'authIds' => 'AuthIds',
        'authModules' => 'AuthModules',
        'ctdrCloudUserId' => 'CtdrCloudUserId',
        'domain' => 'Domain',
        'extendInfo' => 'ExtendInfo',
        'lang' => 'Lang',
        'regions' => 'Regions',
        'secretId' => 'SecretId',
        'secretKey' => 'SecretKey',
        'status' => 'Status',
        'subscriptionIds' => 'SubscriptionIds',
        'tenantId' => 'TenantId',
        'vendorAuthAlias' => 'VendorAuthAlias',
    ];

    public function validate()
    {
        if (\is_array($this->authModules)) {
            Model::validateArray($this->authModules);
        }
        if (\is_array($this->regions)) {
            Model::validateArray($this->regions);
        }
        if (\is_array($this->subscriptionIds)) {
            Model::validateArray($this->subscriptionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authIds) {
            $res['AuthIds'] = $this->authIds;
        }

        if (null !== $this->authModules) {
            if (\is_array($this->authModules)) {
                $res['AuthModules'] = [];
                $n1 = 0;
                foreach ($this->authModules as $item1) {
                    $res['AuthModules'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ctdrCloudUserId) {
            $res['CtdrCloudUserId'] = $this->ctdrCloudUserId;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->regions) {
            if (\is_array($this->regions)) {
                $res['Regions'] = [];
                $n1 = 0;
                foreach ($this->regions as $item1) {
                    $res['Regions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }

        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subscriptionIds) {
            if (\is_array($this->subscriptionIds)) {
                $res['SubscriptionIds'] = [];
                $n1 = 0;
                foreach ($this->subscriptionIds as $item1) {
                    $res['SubscriptionIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
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
        if (isset($map['AuthIds'])) {
            $model->authIds = $map['AuthIds'];
        }

        if (isset($map['AuthModules'])) {
            if (!empty($map['AuthModules'])) {
                $model->authModules = [];
                $n1 = 0;
                foreach ($map['AuthModules'] as $item1) {
                    $model->authModules[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CtdrCloudUserId'])) {
            $model->ctdrCloudUserId = $map['CtdrCloudUserId'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Regions'])) {
            if (!empty($map['Regions'])) {
                $model->regions = [];
                $n1 = 0;
                foreach ($map['Regions'] as $item1) {
                    $model->regions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }

        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubscriptionIds'])) {
            if (!empty($map['SubscriptionIds'])) {
                $model->subscriptionIds = [];
                $n1 = 0;
                foreach ($map['SubscriptionIds'] as $item1) {
                    $model->subscriptionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['VendorAuthAlias'])) {
            $model->vendorAuthAlias = $map['VendorAuthAlias'];
        }

        return $model;
    }
}
