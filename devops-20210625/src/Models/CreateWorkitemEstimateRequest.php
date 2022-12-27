<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkitemEstimateRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example 1316458xxxxx41068
     *
     * @var string
     */
    public $recordUserIdentifier;

    /**
     * @example 21
     *
     * @var string
     */
    public $spentTime;

    /**
     * @example 9144ef6b72d8exxxxx9e61a4d0
     *
     * @var string
     */
    public $type;

    /**
     * @example 1e9903d8b3f1xxxxxf9286ef5
     *
     * @var string
     */
    public $workitemIdentifier;
    protected $_name = [
        'description'          => 'description',
        'recordUserIdentifier' => 'recordUserIdentifier',
        'spentTime'            => 'spentTime',
        'type'                 => 'type',
        'workitemIdentifier'   => 'workitemIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->recordUserIdentifier) {
            $res['recordUserIdentifier'] = $this->recordUserIdentifier;
        }
        if (null !== $this->spentTime) {
            $res['spentTime'] = $this->spentTime;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->workitemIdentifier) {
            $res['workitemIdentifier'] = $this->workitemIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkitemEstimateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['recordUserIdentifier'])) {
            $model->recordUserIdentifier = $map['recordUserIdentifier'];
        }
        if (isset($map['spentTime'])) {
            $model->spentTime = $map['spentTime'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['workitemIdentifier'])) {
            $model->workitemIdentifier = $map['workitemIdentifier'];
        }

        return $model;
    }
}
