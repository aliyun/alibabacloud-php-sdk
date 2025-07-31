<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiCallsResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListDataServiceApiCallsResponseBody\pageResult\callLogList;
use AlibabaCloud\Tea\Model;

class pageResult extends Model
{
    /**
     * @var callLogList[]
     */
    public $callLogList;

    /**
     * @example 68
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'callLogList' => 'CallLogList',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->callLogList) {
            $res['CallLogList'] = [];
            if (null !== $this->callLogList && \is_array($this->callLogList)) {
                $n = 0;
                foreach ($this->callLogList as $item) {
                    $res['CallLogList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallLogList'])) {
            if (!empty($map['CallLogList'])) {
                $model->callLogList = [];
                $n = 0;
                foreach ($map['CallLogList'] as $item) {
                    $model->callLogList[$n++] = null !== $item ? callLogList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
