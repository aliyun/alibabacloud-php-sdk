<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Tea\Model;

class SubmitAnalysisTaskRequest extends Model
{
    /**
     * @var string
     */
    public $analyseType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var SearchCondition
     */
    public $searchCondition;

    /**
     * @var string
     */
    public $teamHashId;
    protected $_name = [
        'analyseType'     => 'analyseType',
        'requestId'       => 'requestId',
        'searchCondition' => 'searchCondition',
        'teamHashId'      => 'teamHashId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyseType) {
            $res['analyseType'] = $this->analyseType;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->searchCondition) {
            $res['searchCondition'] = null !== $this->searchCondition ? $this->searchCondition->toMap() : null;
        }
        if (null !== $this->teamHashId) {
            $res['teamHashId'] = $this->teamHashId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitAnalysisTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analyseType'])) {
            $model->analyseType = $map['analyseType'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['searchCondition'])) {
            $model->searchCondition = SearchCondition::fromMap($map['searchCondition']);
        }
        if (isset($map['teamHashId'])) {
            $model->teamHashId = $map['teamHashId'];
        }

        return $model;
    }
}
