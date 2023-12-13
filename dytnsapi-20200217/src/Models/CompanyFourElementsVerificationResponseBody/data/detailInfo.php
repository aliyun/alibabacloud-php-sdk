<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\CompanyFourElementsVerificationResponseBody\data;

use AlibabaCloud\Tea\Model;

class detailInfo extends Model
{
    /**
     * @description The business status of the enterprise.
     *
     * @example Active
     *
     * @var string
     */
    public $enterpriseStatus;

    /**
     * @description The business term of the enterprise.
     *
     * @example 2023-05-25/2053-05-24
     *
     * @var string
     */
    public $openTime;
    protected $_name = [
        'enterpriseStatus' => 'EnterpriseStatus',
        'openTime'         => 'OpenTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return detailInfo
     */
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
