<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponseBody\structSyncJobAnalyzeResult\resultList;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetStructSyncJobAnalyzeResultResponseBody\structSyncJobAnalyzeResult\summaryList;

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
        'resultList' => 'ResultList',
        'summaryList' => 'SummaryList',
    ];

    public function validate()
    {
        if (\is_array($this->resultList)) {
            Model::validateArray($this->resultList);
        }
        if (\is_array($this->summaryList)) {
            Model::validateArray($this->summaryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resultList) {
            if (\is_array($this->resultList)) {
                $res['ResultList'] = [];
                $n1 = 0;
                foreach ($this->resultList as $item1) {
                    $res['ResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->summaryList) {
            if (\is_array($this->summaryList)) {
                $res['SummaryList'] = [];
                $n1 = 0;
                foreach ($this->summaryList as $item1) {
                    $res['SummaryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n1 = 0;
                foreach ($map['ResultList'] as $item1) {
                    $model->resultList[$n1] = resultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SummaryList'])) {
            if (!empty($map['SummaryList'])) {
                $model->summaryList = [];
                $n1 = 0;
                foreach ($map['SummaryList'] as $item1) {
                    $model->summaryList[$n1] = summaryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
