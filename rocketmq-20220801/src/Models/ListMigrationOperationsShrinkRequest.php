<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class ListMigrationOperationsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $businessStatusShrink;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $operationStatusShrink;

    /**
     * @var string
     */
    public $operationType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'businessStatusShrink' => 'businessStatus',
        'filter' => 'filter',
        'instanceId' => 'instanceId',
        'operationStatusShrink' => 'operationStatus',
        'operationType' => 'operationType',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessStatusShrink) {
            $res['businessStatus'] = $this->businessStatusShrink;
        }

        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->operationStatusShrink) {
            $res['operationStatus'] = $this->operationStatusShrink;
        }

        if (null !== $this->operationType) {
            $res['operationType'] = $this->operationType;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['businessStatus'])) {
            $model->businessStatusShrink = $map['businessStatus'];
        }

        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['operationStatus'])) {
            $model->operationStatusShrink = $map['operationStatus'];
        }

        if (isset($map['operationType'])) {
            $model->operationType = $map['operationType'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
