<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobScoreReportsResponseBody;

use AlibabaCloud\Tea\Model;

class reportsOfScoreDiff extends Model
{
    /**
     * @example 4
     *
     * @var string
     */
    public $logItemId;

    /**
     * @example 323
     *
     * @var string
     */
    public $logRequestId;

    /**
     * @example 3
     *
     * @var string
     */
    public $logUserId;

    /**
     * @example 0.00000234
     *
     * @var string
     */
    public $scoreDiff;

    /**
     * @example {}
     *
     * @var string
     */
    public $scoreDiffDetail;
    protected $_name = [
        'logItemId'       => 'LogItemId',
        'logRequestId'    => 'LogRequestId',
        'logUserId'       => 'LogUserId',
        'scoreDiff'       => 'ScoreDiff',
        'scoreDiffDetail' => 'ScoreDiffDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logItemId) {
            $res['LogItemId'] = $this->logItemId;
        }
        if (null !== $this->logRequestId) {
            $res['LogRequestId'] = $this->logRequestId;
        }
        if (null !== $this->logUserId) {
            $res['LogUserId'] = $this->logUserId;
        }
        if (null !== $this->scoreDiff) {
            $res['ScoreDiff'] = $this->scoreDiff;
        }
        if (null !== $this->scoreDiffDetail) {
            $res['ScoreDiffDetail'] = $this->scoreDiffDetail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reportsOfScoreDiff
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogItemId'])) {
            $model->logItemId = $map['LogItemId'];
        }
        if (isset($map['LogRequestId'])) {
            $model->logRequestId = $map['LogRequestId'];
        }
        if (isset($map['LogUserId'])) {
            $model->logUserId = $map['LogUserId'];
        }
        if (isset($map['ScoreDiff'])) {
            $model->scoreDiff = $map['ScoreDiff'];
        }
        if (isset($map['ScoreDiffDetail'])) {
            $model->scoreDiffDetail = $map['ScoreDiffDetail'];
        }

        return $model;
    }
}
