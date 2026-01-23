<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListSecurityIdentifyRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListSecurityIdentifyRecordsResponseBody\pageResult\identifyRecordList;

class pageResult extends Model
{
    /**
     * @var identifyRecordList[]
     */
    public $identifyRecordList;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'identifyRecordList' => 'IdentifyRecordList',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->identifyRecordList)) {
            Model::validateArray($this->identifyRecordList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identifyRecordList) {
            if (\is_array($this->identifyRecordList)) {
                $res['IdentifyRecordList'] = [];
                $n1 = 0;
                foreach ($this->identifyRecordList as $item1) {
                    $res['IdentifyRecordList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IdentifyRecordList'])) {
            if (!empty($map['IdentifyRecordList'])) {
                $model->identifyRecordList = [];
                $n1 = 0;
                foreach ($map['IdentifyRecordList'] as $item1) {
                    $model->identifyRecordList[$n1] = identifyRecordList::fromMap($item1);
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
