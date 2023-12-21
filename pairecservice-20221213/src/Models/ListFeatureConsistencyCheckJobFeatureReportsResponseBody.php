<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobFeatureReportsResponseBody\reportsOfFeatureDiff;
use AlibabaCloud\Tea\Model;

class ListFeatureConsistencyCheckJobFeatureReportsResponseBody extends Model
{
    /**
     * @example https://********
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
     * @var reportsOfFeatureDiff[]
     */
    public $reportsOfFeatureDiff;

    /**
     * @example BBD41FBF-E75C-551A-92FA-CAD654AA006F
     *
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
        if (null !== $this->reportsOfFeatureDiff) {
            $res['ReportsOfFeatureDiff'] = [];
            if (null !== $this->reportsOfFeatureDiff && \is_array($this->reportsOfFeatureDiff)) {
                $n = 0;
                foreach ($this->reportsOfFeatureDiff as $item) {
                    $res['ReportsOfFeatureDiff'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListFeatureConsistencyCheckJobFeatureReportsResponseBody
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
        if (isset($map['ReportsOfFeatureDiff'])) {
            if (!empty($map['ReportsOfFeatureDiff'])) {
                $model->reportsOfFeatureDiff = [];
                $n                           = 0;
                foreach ($map['ReportsOfFeatureDiff'] as $item) {
                    $model->reportsOfFeatureDiff[$n++] = null !== $item ? reportsOfFeatureDiff::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
