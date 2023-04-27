<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponseBody\structSyncJobAnalyzeResult\resultList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponseBody\structSyncJobAnalyzeResult\summaryList;
use AlibabaCloud\Tea\Model;

class structSyncJobAnalyzeResult extends Model
{
    /**
     * @var resultList[]
     */
    public $resultList;

    /**
     * @var summaryList[]
     */
    public $summaryList;
    protected $_name = [
        'resultList'  => 'ResultList',
        'summaryList' => 'SummaryList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultList) {
            $res['ResultList'] = [];
            if (null !== $this->resultList && \is_array($this->resultList)) {
                $n = 0;
                foreach ($this->resultList as $item) {
                    $res['ResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->summaryList) {
            $res['SummaryList'] = [];
            if (null !== $this->summaryList && \is_array($this->summaryList)) {
                $n = 0;
                foreach ($this->summaryList as $item) {
                    $res['SummaryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structSyncJobAnalyzeResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n                 = 0;
                foreach ($map['ResultList'] as $item) {
                    $model->resultList[$n++] = null !== $item ? resultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SummaryList'])) {
            if (!empty($map['SummaryList'])) {
                $model->summaryList = [];
                $n                  = 0;
                foreach ($map['SummaryList'] as $item) {
                    $model->summaryList[$n++] = null !== $item ? summaryList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
