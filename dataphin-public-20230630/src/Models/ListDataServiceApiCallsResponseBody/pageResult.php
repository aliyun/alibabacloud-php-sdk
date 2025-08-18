<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiCallsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiCallsResponseBody\pageResult\callLogList;

class pageResult extends Model
{
    /**
     * @var callLogList[]
     */
    public $callLogList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'callLogList' => 'CallLogList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->callLogList)) {
            Model::validateArray($this->callLogList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callLogList) {
            if (\is_array($this->callLogList)) {
                $res['CallLogList'] = [];
                $n1 = 0;
                foreach ($this->callLogList as $item1) {
                    $res['CallLogList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CallLogList'])) {
            if (!empty($map['CallLogList'])) {
                $model->callLogList = [];
                $n1 = 0;
                foreach ($map['CallLogList'] as $item1) {
                    $model->callLogList[$n1] = callLogList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
