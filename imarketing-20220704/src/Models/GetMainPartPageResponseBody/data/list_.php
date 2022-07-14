<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\GetMainPartPageResponseBody\data;

use AlibabaCloud\SDK\Imarketing\V20220704\Models\GetMainPartPageResponseBody\data\list_\accountTypeList;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var accountTypeList[]
     */
    public $accountTypeList;

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
    protected $_name = [
        'accountTypeList' => 'AccountTypeList',
        'company'         => 'Company',
        'mainId'          => 'MainId',
        'mainName'        => 'MainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountTypeList) {
            $res['AccountTypeList'] = [];
            if (null !== $this->accountTypeList && \is_array($this->accountTypeList)) {
                $n = 0;
                foreach ($this->accountTypeList as $item) {
                    $res['AccountTypeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['AccountTypeList'])) {
            if (!empty($map['AccountTypeList'])) {
                $model->accountTypeList = [];
                $n                      = 0;
                foreach ($map['AccountTypeList'] as $item) {
                    $model->accountTypeList[$n++] = null !== $item ? accountTypeList::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
