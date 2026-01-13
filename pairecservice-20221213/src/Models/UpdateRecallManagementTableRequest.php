<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class UpdateRecallManagementTableRequest extends Model
{
    /**
     * @var bool
     */
    public $enableDataSizeFluctuationThreshold;

    /**
     * @var bool
     */
    public $enableRowCountFluctuationThreshold;

    /**
     * @var string
     */
    public $indexVersionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxDataSizeFluctuationThreshold;

    /**
     * @var int
     */
    public $maxRowCountFluctuationThreshold;

    /**
     * @var int
     */
    public $minDataSizeFluctuationThreshold;

    /**
     * @var int
     */
    public $minRowCountFluctuationThreshold;
    protected $_name = [
        'enableDataSizeFluctuationThreshold' => 'EnableDataSizeFluctuationThreshold',
        'enableRowCountFluctuationThreshold' => 'EnableRowCountFluctuationThreshold',
        'indexVersionId' => 'IndexVersionId',
        'instanceId' => 'InstanceId',
        'maxDataSizeFluctuationThreshold' => 'MaxDataSizeFluctuationThreshold',
        'maxRowCountFluctuationThreshold' => 'MaxRowCountFluctuationThreshold',
        'minDataSizeFluctuationThreshold' => 'MinDataSizeFluctuationThreshold',
        'minRowCountFluctuationThreshold' => 'MinRowCountFluctuationThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableDataSizeFluctuationThreshold) {
            $res['EnableDataSizeFluctuationThreshold'] = $this->enableDataSizeFluctuationThreshold;
        }

        if (null !== $this->enableRowCountFluctuationThreshold) {
            $res['EnableRowCountFluctuationThreshold'] = $this->enableRowCountFluctuationThreshold;
        }

        if (null !== $this->indexVersionId) {
            $res['IndexVersionId'] = $this->indexVersionId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxDataSizeFluctuationThreshold) {
            $res['MaxDataSizeFluctuationThreshold'] = $this->maxDataSizeFluctuationThreshold;
        }

        if (null !== $this->maxRowCountFluctuationThreshold) {
            $res['MaxRowCountFluctuationThreshold'] = $this->maxRowCountFluctuationThreshold;
        }

        if (null !== $this->minDataSizeFluctuationThreshold) {
            $res['MinDataSizeFluctuationThreshold'] = $this->minDataSizeFluctuationThreshold;
        }

        if (null !== $this->minRowCountFluctuationThreshold) {
            $res['MinRowCountFluctuationThreshold'] = $this->minRowCountFluctuationThreshold;
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
        if (isset($map['EnableDataSizeFluctuationThreshold'])) {
            $model->enableDataSizeFluctuationThreshold = $map['EnableDataSizeFluctuationThreshold'];
        }

        if (isset($map['EnableRowCountFluctuationThreshold'])) {
            $model->enableRowCountFluctuationThreshold = $map['EnableRowCountFluctuationThreshold'];
        }

        if (isset($map['IndexVersionId'])) {
            $model->indexVersionId = $map['IndexVersionId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MaxDataSizeFluctuationThreshold'])) {
            $model->maxDataSizeFluctuationThreshold = $map['MaxDataSizeFluctuationThreshold'];
        }

        if (isset($map['MaxRowCountFluctuationThreshold'])) {
            $model->maxRowCountFluctuationThreshold = $map['MaxRowCountFluctuationThreshold'];
        }

        if (isset($map['MinDataSizeFluctuationThreshold'])) {
            $model->minDataSizeFluctuationThreshold = $map['MinDataSizeFluctuationThreshold'];
        }

        if (isset($map['MinRowCountFluctuationThreshold'])) {
            $model->minRowCountFluctuationThreshold = $map['MinRowCountFluctuationThreshold'];
        }

        return $model;
    }
}
