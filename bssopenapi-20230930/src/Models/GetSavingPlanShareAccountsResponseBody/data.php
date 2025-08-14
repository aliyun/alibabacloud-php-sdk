<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanShareAccountsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20230930\Models\GetSavingPlanShareAccountsResponseBody\data\shareTimeList;

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

    public function validate()
    {
        if (\is_array($this->shareTimeList)) {
            Model::validateArray($this->shareTimeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->shareTimeList) {
            if (\is_array($this->shareTimeList)) {
                $res['ShareTimeList'] = [];
                $n1 = 0;
                foreach ($this->shareTimeList as $item1) {
                    $res['ShareTimeList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['ShareTimeList'])) {
            if (!empty($map['ShareTimeList'])) {
                $model->shareTimeList = [];
                $n1 = 0;
                foreach ($map['ShareTimeList'] as $item1) {
                    $model->shareTimeList[$n1] = shareTimeList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
