<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetCustomerCategoryResponseBody\data\bizCategory\subConfigs;

use AlibabaCloud\Dara\Model;

class bizSubCategory extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var bool
     */
    public $isCheck;

    /**
     * @var bool
     */
    public $mainBiz;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $other;
    protected $_name = [
        'code' => 'Code',
        'isCheck' => 'IsCheck',
        'mainBiz' => 'MainBiz',
        'name' => 'Name',
        'other' => 'Other',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->isCheck) {
            $res['IsCheck'] = $this->isCheck;
        }

        if (null !== $this->mainBiz) {
            $res['MainBiz'] = $this->mainBiz;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->other) {
            $res['Other'] = $this->other;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['IsCheck'])) {
            $model->isCheck = $map['IsCheck'];
        }

        if (isset($map['MainBiz'])) {
            $model->mainBiz = $map['MainBiz'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Other'])) {
            $model->other = $map['Other'];
        }

        return $model;
    }
}
