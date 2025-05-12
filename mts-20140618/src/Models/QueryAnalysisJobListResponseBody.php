<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\analysisJobList;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryAnalysisJobListResponseBody\nonExistAnalysisJobIds;

class QueryAnalysisJobListResponseBody extends Model
{
    /**
     * @var analysisJobList
     */
    public $analysisJobList;

    /**
     * @var nonExistAnalysisJobIds
     */
    public $nonExistAnalysisJobIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'analysisJobList' => 'AnalysisJobList',
        'nonExistAnalysisJobIds' => 'NonExistAnalysisJobIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->analysisJobList) {
            $this->analysisJobList->validate();
        }
        if (null !== $this->nonExistAnalysisJobIds) {
            $this->nonExistAnalysisJobIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisJobList) {
            $res['AnalysisJobList'] = null !== $this->analysisJobList ? $this->analysisJobList->toArray($noStream) : $this->analysisJobList;
        }

        if (null !== $this->nonExistAnalysisJobIds) {
            $res['NonExistAnalysisJobIds'] = null !== $this->nonExistAnalysisJobIds ? $this->nonExistAnalysisJobIds->toArray($noStream) : $this->nonExistAnalysisJobIds;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AnalysisJobList'])) {
            $model->analysisJobList = analysisJobList::fromMap($map['AnalysisJobList']);
        }

        if (isset($map['NonExistAnalysisJobIds'])) {
            $model->nonExistAnalysisJobIds = nonExistAnalysisJobIds::fromMap($map['NonExistAnalysisJobIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
