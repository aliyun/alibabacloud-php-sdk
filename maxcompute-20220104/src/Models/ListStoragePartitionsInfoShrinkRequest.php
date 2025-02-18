<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class ListStoragePartitionsInfoShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $ascOrder;
    /**
     * @var string
     */
    public $date;
    /**
     * @var string
     */
    public $orderColumn;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $partitionPrefix;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $schema;
    /**
     * @var string
     */
    public $tenantId;
    /**
     * @var string
     */
    public $typesShrink;
    protected $_name = [
        'ascOrder'        => 'ascOrder',
        'date'            => 'date',
        'orderColumn'     => 'orderColumn',
        'pageNumber'      => 'pageNumber',
        'pageSize'        => 'pageSize',
        'partitionPrefix' => 'partitionPrefix',
        'region'          => 'region',
        'schema'          => 'schema',
        'tenantId'        => 'tenantId',
        'typesShrink'     => 'types',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ascOrder) {
            $res['ascOrder'] = $this->ascOrder;
        }

        if (null !== $this->date) {
            $res['date'] = $this->date;
        }

        if (null !== $this->orderColumn) {
            $res['orderColumn'] = $this->orderColumn;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->partitionPrefix) {
            $res['partitionPrefix'] = $this->partitionPrefix;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->schema) {
            $res['schema'] = $this->schema;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->typesShrink) {
            $res['types'] = $this->typesShrink;
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
        if (isset($map['ascOrder'])) {
            $model->ascOrder = $map['ascOrder'];
        }

        if (isset($map['date'])) {
            $model->date = $map['date'];
        }

        if (isset($map['orderColumn'])) {
            $model->orderColumn = $map['orderColumn'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['partitionPrefix'])) {
            $model->partitionPrefix = $map['partitionPrefix'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['schema'])) {
            $model->schema = $map['schema'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['types'])) {
            $model->typesShrink = $map['types'];
        }

        return $model;
    }
}
