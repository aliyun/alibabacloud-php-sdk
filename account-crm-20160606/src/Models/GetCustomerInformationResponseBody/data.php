<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models\GetCustomerInformationResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
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
    public $website;
    protected $_name = [
        'biz' => 'Biz',
        'customerCategory' => 'CustomerCategory',
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

        if (isset($map['Website'])) {
            $model->website = $map['Website'];
        }

        return $model;
    }
}
