<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeSparkSQLDiagnosisAttributeResponseBody\operatorListSortedByMetrics;

class DescribeSparkSQLDiagnosisAttributeResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var Adb4MysqlSparkDiagnosisInfo[]
     */
    public $diagnosisInfos;

    /**
     * @var int
     */
    public $elapsedTime;

    /**
     * @var int
     */
    public $innerQueryId;

    /**
     * @var operatorListSortedByMetrics
     */
    public $operatorListSortedByMetrics;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var OperatorNode
     */
    public $root;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'appId' => 'AppId',
        'diagnosisInfos' => 'DiagnosisInfos',
        'elapsedTime' => 'ElapsedTime',
        'innerQueryId' => 'InnerQueryId',
        'operatorListSortedByMetrics' => 'OperatorListSortedByMetrics',
        'requestId' => 'RequestId',
        'root' => 'Root',
    ];

    public function validate()
    {
        if (\is_array($this->diagnosisInfos)) {
            Model::validateArray($this->diagnosisInfos);
        }
        if (null !== $this->operatorListSortedByMetrics) {
            $this->operatorListSortedByMetrics->validate();
        }
        if (null !== $this->root) {
            $this->root->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->diagnosisInfos) {
            if (\is_array($this->diagnosisInfos)) {
                $res['DiagnosisInfos'] = [];
                $n1 = 0;
                foreach ($this->diagnosisInfos as $item1) {
                    $res['DiagnosisInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->elapsedTime) {
            $res['ElapsedTime'] = $this->elapsedTime;
        }

        if (null !== $this->innerQueryId) {
            $res['InnerQueryId'] = $this->innerQueryId;
        }

        if (null !== $this->operatorListSortedByMetrics) {
            $res['OperatorListSortedByMetrics'] = null !== $this->operatorListSortedByMetrics ? $this->operatorListSortedByMetrics->toArray($noStream) : $this->operatorListSortedByMetrics;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->root) {
            $res['Root'] = null !== $this->root ? $this->root->toArray($noStream) : $this->root;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['DiagnosisInfos'])) {
            if (!empty($map['DiagnosisInfos'])) {
                $model->diagnosisInfos = [];
                $n1 = 0;
                foreach ($map['DiagnosisInfos'] as $item1) {
                    $model->diagnosisInfos[$n1++] = Adb4MysqlSparkDiagnosisInfo::fromMap($item1);
                }
            }
        }

        if (isset($map['ElapsedTime'])) {
            $model->elapsedTime = $map['ElapsedTime'];
        }

        if (isset($map['InnerQueryId'])) {
            $model->innerQueryId = $map['InnerQueryId'];
        }

        if (isset($map['OperatorListSortedByMetrics'])) {
            $model->operatorListSortedByMetrics = operatorListSortedByMetrics::fromMap($map['OperatorListSortedByMetrics']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Root'])) {
            $model->root = OperatorNode::fromMap($map['Root']);
        }

        return $model;
    }
}
