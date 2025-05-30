<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models;

use AlibabaCloud\Dara\Model;

class CreateDemandPlanRequest extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
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
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'accountId' => 'accountId',
        'description' => 'description',
        'name' => 'name',
        'period' => 'period',
        'source' => 'source',
        'targetCid' => 'targetCid',
        'type' => 'type',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
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
