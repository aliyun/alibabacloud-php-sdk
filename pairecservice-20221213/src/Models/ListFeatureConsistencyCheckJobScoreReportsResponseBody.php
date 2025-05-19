<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobScoreReportsResponseBody\reportsOfScoreDiff;

class ListFeatureConsistencyCheckJobScoreReportsResponseBody extends Model
{
    /**
     * @var string
     */
    public $dataPath;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var reportsOfScoreDiff[]
     */
    public $reportsOfScoreDiff;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataPath' => 'DataPath',
        'ossPath' => 'OssPath',
        'reportsOfScoreDiff' => 'ReportsOfScoreDiff',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->reportsOfScoreDiff)) {
            Model::validateArray($this->reportsOfScoreDiff);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataPath) {
            $res['DataPath'] = $this->dataPath;
        }

        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }

        if (null !== $this->reportsOfScoreDiff) {
            if (\is_array($this->reportsOfScoreDiff)) {
                $res['ReportsOfScoreDiff'] = [];
                $n1 = 0;
                foreach ($this->reportsOfScoreDiff as $item1) {
                    $res['ReportsOfScoreDiff'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['DataPath'])) {
            $model->dataPath = $map['DataPath'];
        }

        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }

        if (isset($map['ReportsOfScoreDiff'])) {
            if (!empty($map['ReportsOfScoreDiff'])) {
                $model->reportsOfScoreDiff = [];
                $n1 = 0;
                foreach ($map['ReportsOfScoreDiff'] as $item1) {
                    $model->reportsOfScoreDiff[$n1++] = reportsOfScoreDiff::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
