<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class DescribeDiagnosticResultResponseBody extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $diagnosticId;

    /**
     * @var mixed[]
     */
    public $diagnosticResults;

    /**
     * @var string
     */
    public $diagnosticState;

    /**
     * @var string
     */
    public $diagnosticType;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string[]
     */
    public $nodeIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'createdTime' => 'CreatedTime',
        'diagnosticId' => 'DiagnosticId',
        'diagnosticResults' => 'DiagnosticResults',
        'diagnosticState' => 'DiagnosticState',
        'diagnosticType' => 'DiagnosticType',
        'endTime' => 'EndTime',
        'nodeIds' => 'NodeIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->diagnosticResults)) {
            Model::validateArray($this->diagnosticResults);
        }
        if (\is_array($this->nodeIds)) {
            Model::validateArray($this->nodeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->diagnosticId) {
            $res['DiagnosticId'] = $this->diagnosticId;
        }

        if (null !== $this->diagnosticResults) {
            if (\is_array($this->diagnosticResults)) {
                $res['DiagnosticResults'] = [];
                $n1 = 0;
                foreach ($this->diagnosticResults as $item1) {
                    $res['DiagnosticResults'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->diagnosticState) {
            $res['DiagnosticState'] = $this->diagnosticState;
        }

        if (null !== $this->diagnosticType) {
            $res['DiagnosticType'] = $this->diagnosticType;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->nodeIds) {
            if (\is_array($this->nodeIds)) {
                $res['NodeIds'] = [];
                $n1 = 0;
                foreach ($this->nodeIds as $item1) {
                    $res['NodeIds'][$n1++] = $item1;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['DiagnosticId'])) {
            $model->diagnosticId = $map['DiagnosticId'];
        }

        if (isset($map['DiagnosticResults'])) {
            if (!empty($map['DiagnosticResults'])) {
                $model->diagnosticResults = [];
                $n1 = 0;
                foreach ($map['DiagnosticResults'] as $item1) {
                    $model->diagnosticResults[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DiagnosticState'])) {
            $model->diagnosticState = $map['DiagnosticState'];
        }

        if (isset($map['DiagnosticType'])) {
            $model->diagnosticType = $map['DiagnosticType'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = [];
                $n1 = 0;
                foreach ($map['NodeIds'] as $item1) {
                    $model->nodeIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
