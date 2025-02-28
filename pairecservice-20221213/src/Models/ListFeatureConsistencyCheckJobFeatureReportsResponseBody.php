<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobFeatureReportsResponseBody\reportsOfFeatureDiff;

class ListFeatureConsistencyCheckJobFeatureReportsResponseBody extends Model
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
     * @var reportsOfFeatureDiff[]
     */
    public $reportsOfFeatureDiff;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataPath'             => 'DataPath',
        'ossPath'              => 'OssPath',
        'reportsOfFeatureDiff' => 'ReportsOfFeatureDiff',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->reportsOfFeatureDiff)) {
            Model::validateArray($this->reportsOfFeatureDiff);
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

        if (null !== $this->reportsOfFeatureDiff) {
            if (\is_array($this->reportsOfFeatureDiff)) {
                $res['ReportsOfFeatureDiff'] = [];
                $n1                          = 0;
                foreach ($this->reportsOfFeatureDiff as $item1) {
                    $res['ReportsOfFeatureDiff'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ReportsOfFeatureDiff'])) {
            if (!empty($map['ReportsOfFeatureDiff'])) {
                $model->reportsOfFeatureDiff = [];
                $n1                          = 0;
                foreach ($map['ReportsOfFeatureDiff'] as $item1) {
                    $model->reportsOfFeatureDiff[$n1++] = reportsOfFeatureDiff::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
