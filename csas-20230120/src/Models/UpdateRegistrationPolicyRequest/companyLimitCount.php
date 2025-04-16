<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\UpdateRegistrationPolicyRequest;

use AlibabaCloud\Dara\Model;

class companyLimitCount extends Model
{
    /**
     * @var int
     */
    public $all;

    /**
     * @var int
     */
    public $mobile;

    /**
     * @var int
     */
    public $PC;
    protected $_name = [
        'all' => 'All',
        'mobile' => 'Mobile',
        'PC' => 'PC',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->PC) {
            $res['PC'] = $this->PC;
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
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['PC'])) {
            $model->PC = $map['PC'];
        }

        return $model;
    }
}
