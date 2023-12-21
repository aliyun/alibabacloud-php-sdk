<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobScoreReportsResponseBody\reportsOfScoreDiff;
use AlibabaCloud\Tea\Model;

class ListFeatureConsistencyCheckJobScoreReportsResponseBody extends Model
{
    /**
     * @example http://*******
     *
     * @var string
     */
    public $dataPath;

    /**
     * @example oss://********
     *
     * @var string
     */
    public $ossPath;

    /**
     * @var reportsOfScoreDiff[]
     */
    public $reportsOfScoreDiff;

    /**
     * @example F0AB6527-093F-5C44-B3BD-42C8C210C619
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataPath'           => 'DataPath',
        'ossPath'            => 'OssPath',
        'reportsOfScoreDiff' => 'ReportsOfScoreDiff',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPath) {
            $res['DataPath'] = $this->dataPath;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }
        if (null !== $this->reportsOfScoreDiff) {
            $res['ReportsOfScoreDiff'] = [];
            if (null !== $this->reportsOfScoreDiff && \is_array($this->reportsOfScoreDiff)) {
                $n = 0;
                foreach ($this->reportsOfScoreDiff as $item) {
                    $res['ReportsOfScoreDiff'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFeatureConsistencyCheckJobScoreReportsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPath'])) {
            $model->dataPath = $map['DataPath'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }
        if (isset($map['ReportsOfScoreDiff'])) {
            if (!empty($map['ReportsOfScoreDiff'])) {
                $model->reportsOfScoreDiff = [];
                $n                         = 0;
                foreach ($map['ReportsOfScoreDiff'] as $item) {
                    $model->reportsOfScoreDiff[$n++] = null !== $item ? reportsOfScoreDiff::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
