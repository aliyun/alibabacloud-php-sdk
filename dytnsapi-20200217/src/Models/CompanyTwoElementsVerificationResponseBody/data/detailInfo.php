<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyTwoElementsVerificationResponseBody\data;

use AlibabaCloud\Dara\Model;

class detailInfo extends Model
{
    /**
     * @var string
     */
    public $enterpriseStatus;
    /**
     * @var string
     */
    public $openTime;
    protected $_name = [
        'enterpriseStatus' => 'EnterpriseStatus',
        'openTime'         => 'OpenTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enterpriseStatus) {
            $res['EnterpriseStatus'] = $this->enterpriseStatus;
        }

        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
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
        if (isset($map['EnterpriseStatus'])) {
            $model->enterpriseStatus = $map['EnterpriseStatus'];
        }

        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }

        return $model;
    }
}
