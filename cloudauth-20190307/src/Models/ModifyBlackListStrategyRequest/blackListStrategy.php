<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyBlackListStrategyRequest;

use AlibabaCloud\Dara\Model;

class blackListStrategy extends Model
{
    /**
     * @var string
     */
    public $bizContent;

    /**
     * @var string
     */
    public $bizKey;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'bizContent' => 'BizContent',
        'bizKey' => 'BizKey',
        'id' => 'Id',
        'productName' => 'ProductName',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizContent) {
            $res['BizContent'] = $this->bizContent;
        }

        if (null !== $this->bizKey) {
            $res['BizKey'] = $this->bizKey;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['BizContent'])) {
            $model->bizContent = $map['BizContent'];
        }

        if (isset($map['BizKey'])) {
            $model->bizKey = $map['BizKey'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
