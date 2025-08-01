<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Tea\Model;

class CreateDemandPlanRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1065737167271819
     *
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $demandType;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example FY2022
     *
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $targetCid;

    /**
     * @description This parameter is required.
     *
     * @example URGENT
     *
     * @var string
     */
    public $type;

    /**
     * @description This parameter is required.
     *
     * @example 262940
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'accountId' => 'accountId',
        'demandType' => 'demandType',
        'description' => 'description',
        'name' => 'name',
        'period' => 'period',
        'source' => 'source',
        'targetCid' => 'targetCid',
        'type' => 'type',
        'userId' => 'userId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->demandType) {
            $res['demandType'] = $this->demandType;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->period) {
            $res['period'] = $this->period;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->targetCid) {
            $res['targetCid'] = $this->targetCid;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDemandPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['demandType'])) {
            $model->demandType = $map['demandType'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['period'])) {
            $model->period = $map['period'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['targetCid'])) {
            $model->targetCid = $map['targetCid'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
