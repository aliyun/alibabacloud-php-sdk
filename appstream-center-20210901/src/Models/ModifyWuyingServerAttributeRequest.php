<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ModifyWuyingServerAttributeRequest extends Model
{
    /**
     * @var bool
     */
    public $erdmaEnabled;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $wuyingServerId;

    /**
     * @var string
     */
    public $wuyingServerName;
    protected $_name = [
        'erdmaEnabled' => 'ErdmaEnabled',
        'password' => 'Password',
        'productType' => 'ProductType',
        'wuyingServerId' => 'WuyingServerId',
        'wuyingServerName' => 'WuyingServerName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->erdmaEnabled) {
            $res['ErdmaEnabled'] = $this->erdmaEnabled;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->wuyingServerId) {
            $res['WuyingServerId'] = $this->wuyingServerId;
        }

        if (null !== $this->wuyingServerName) {
            $res['WuyingServerName'] = $this->wuyingServerName;
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
        if (isset($map['ErdmaEnabled'])) {
            $model->erdmaEnabled = $map['ErdmaEnabled'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['WuyingServerId'])) {
            $model->wuyingServerId = $map['WuyingServerId'];
        }

        if (isset($map['WuyingServerName'])) {
            $model->wuyingServerName = $map['WuyingServerName'];
        }

        return $model;
    }
}
