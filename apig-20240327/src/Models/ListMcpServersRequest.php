<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class ListMcpServersRequest extends Model
{
    /**
     * @var string
     */
    public $createFromTypes;

    /**
     * @var string
     */
    public $deployStatuses;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $nameLike;

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
    public $type;
    protected $_name = [
        'createFromTypes' => 'createFromTypes',
        'deployStatuses' => 'deployStatuses',
        'gatewayId' => 'gatewayId',
        'nameLike' => 'nameLike',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createFromTypes) {
            $res['createFromTypes'] = $this->createFromTypes;
        }

        if (null !== $this->deployStatuses) {
            $res['deployStatuses'] = $this->deployStatuses;
        }

        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->nameLike) {
            $res['nameLike'] = $this->nameLike;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['createFromTypes'])) {
            $model->createFromTypes = $map['createFromTypes'];
        }

        if (isset($map['deployStatuses'])) {
            $model->deployStatuses = $map['deployStatuses'];
        }

        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['nameLike'])) {
            $model->nameLike = $map['nameLike'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
