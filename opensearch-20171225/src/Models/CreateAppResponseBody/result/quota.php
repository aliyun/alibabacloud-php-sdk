<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateAppResponseBody\result;

use AlibabaCloud\Dara\Model;

class quota extends Model
{
    /**
     * @var int
     */
    public $computeResource;

    /**
     * @var int
     */
    public $docSize;

    /**
     * @var int
     */
    public $qps;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var int
     */
    public $usedComputeResource;

    /**
     * @var float
     */
    public $usedDocSize;

    /**
     * @var int
     */
    public $usedQps;
    protected $_name = [
        'computeResource' => 'computeResource',
        'docSize' => 'docSize',
        'qps' => 'qps',
        'spec' => 'spec',
        'usedComputeResource' => 'usedComputeResource',
        'usedDocSize' => 'usedDocSize',
        'usedQps' => 'usedQps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeResource) {
            $res['computeResource'] = $this->computeResource;
        }

        if (null !== $this->docSize) {
            $res['docSize'] = $this->docSize;
        }

        if (null !== $this->qps) {
            $res['qps'] = $this->qps;
        }

        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }

        if (null !== $this->usedComputeResource) {
            $res['usedComputeResource'] = $this->usedComputeResource;
        }

        if (null !== $this->usedDocSize) {
            $res['usedDocSize'] = $this->usedDocSize;
        }

        if (null !== $this->usedQps) {
            $res['usedQps'] = $this->usedQps;
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
        if (isset($map['computeResource'])) {
            $model->computeResource = $map['computeResource'];
        }

        if (isset($map['docSize'])) {
            $model->docSize = $map['docSize'];
        }

        if (isset($map['qps'])) {
            $model->qps = $map['qps'];
        }

        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        if (isset($map['usedComputeResource'])) {
            $model->usedComputeResource = $map['usedComputeResource'];
        }

        if (isset($map['usedDocSize'])) {
            $model->usedDocSize = $map['usedDocSize'];
        }

        if (isset($map['usedQps'])) {
            $model->usedQps = $map['usedQps'];
        }

        return $model;
    }
}
