<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\GetBrandPageResponseBody\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $accountNo;

    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $company;

    /**
     * @var int
     */
    public $mainId;

    /**
     * @var string
     */
    public $mainName;

    /**
     * @var int
     */
    public $parentMainId;
    protected $_name = [
        'accountNo'    => 'AccountNo',
        'accountType'  => 'AccountType',
        'company'      => 'Company',
        'mainId'       => 'MainId',
        'mainName'     => 'MainName',
        'parentMainId' => 'ParentMainId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNo) {
            $res['AccountNo'] = $this->accountNo;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->company) {
            $res['Company'] = $this->company;
        }
        if (null !== $this->mainId) {
            $res['MainId'] = $this->mainId;
        }
        if (null !== $this->mainName) {
            $res['MainName'] = $this->mainName;
        }
        if (null !== $this->parentMainId) {
            $res['ParentMainId'] = $this->parentMainId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountNo'])) {
            $model->accountNo = $map['AccountNo'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Company'])) {
            $model->company = $map['Company'];
        }
        if (isset($map['MainId'])) {
            $model->mainId = $map['MainId'];
        }
        if (isset($map['MainName'])) {
            $model->mainName = $map['MainName'];
        }
        if (isset($map['ParentMainId'])) {
            $model->parentMainId = $map['ParentMainId'];
        }

        return $model;
    }
}
