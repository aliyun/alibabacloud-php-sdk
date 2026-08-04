<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class ModifyCustomerInfoRequest extends Model
{
    /**
     * @var string
     */
    public $biz;

    /**
     * @var string
     */
    public $customerCategory;

    /**
     * @var string
     */
    public $customerSubCategory;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $website;
    protected $_name = [
        'biz' => 'Biz',
        'customerCategory' => 'CustomerCategory',
        'customerSubCategory' => 'CustomerSubCategory',
        'userId' => 'UserId',
        'website' => 'Website',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->biz) {
            $res['Biz'] = $this->biz;
        }

        if (null !== $this->customerCategory) {
            $res['CustomerCategory'] = $this->customerCategory;
        }

        if (null !== $this->customerSubCategory) {
            $res['CustomerSubCategory'] = $this->customerSubCategory;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->website) {
            $res['Website'] = $this->website;
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
        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }

        if (isset($map['CustomerCategory'])) {
            $model->customerCategory = $map['CustomerCategory'];
        }

        if (isset($map['CustomerSubCategory'])) {
            $model->customerSubCategory = $map['CustomerSubCategory'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['Website'])) {
            $model->website = $map['Website'];
        }

        return $model;
    }
}
