<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DescribeCreditPackageRequest extends Model
{
    /**
     * @var string
     */
    public $creditPackageId;

    /**
     * @var string
     */
    public $creditPackageStatus;
    protected $_name = [
        'creditPackageId' => 'CreditPackageId',
        'creditPackageStatus' => 'CreditPackageStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creditPackageId) {
            $res['CreditPackageId'] = $this->creditPackageId;
        }

        if (null !== $this->creditPackageStatus) {
            $res['CreditPackageStatus'] = $this->creditPackageStatus;
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
        if (isset($map['CreditPackageId'])) {
            $model->creditPackageId = $map['CreditPackageId'];
        }

        if (isset($map['CreditPackageStatus'])) {
            $model->creditPackageStatus = $map['CreditPackageStatus'];
        }

        return $model;
    }
}
