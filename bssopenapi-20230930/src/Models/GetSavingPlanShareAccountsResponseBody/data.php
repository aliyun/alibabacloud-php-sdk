<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanShareAccountsResponseBody;

use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanShareAccountsResponseBody\data\shareTimeList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var shareTimeList[]
     */
    public $shareTimeList;
    protected $_name = [
        'accountId' => 'AccountId',
        'aliUid' => 'AliUid',
        'shareTimeList' => 'ShareTimeList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->shareTimeList) {
            $res['ShareTimeList'] = [];
            if (null !== $this->shareTimeList && \is_array($this->shareTimeList)) {
                $n = 0;
                foreach ($this->shareTimeList as $item) {
                    $res['ShareTimeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['ShareTimeList'])) {
            if (!empty($map['ShareTimeList'])) {
                $model->shareTimeList = [];
                $n = 0;
                foreach ($map['ShareTimeList'] as $item) {
                    $model->shareTimeList[$n++] = null !== $item ? shareTimeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
