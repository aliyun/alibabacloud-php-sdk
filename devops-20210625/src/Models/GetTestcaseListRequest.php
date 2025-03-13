<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetTestcaseListRequest extends Model
{
    /**
     * @example {\\"conditionGroups\\":[[{\\"fieldIdentifier\\":\\"status\\",\\"operator\\":\\"CONTAINS\\",\\"value\\":[\\"cc961a18adf770c6e423ccc5\\"],\\"toValue\\":null,,\\"className\\":\\"status\\",\\"format\\":\\"list\\"}]]}
     *
     * @var string
     */
    public $conditions;

    /**
     * @example e27b8eace6501ce51cf5d56784
     *
     * @var string
     */
    public $directoryIdentifier;

    /**
     * @example 20
     *
     * @var string
     */
    public $maxResult;

    /**
     * @example 2591861102250c4522380b33a6
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description This parameter is required.
     *
     * @example 6d5984c7d92b23fa53d4743c37
     *
     * @var string
     */
    public $spaceIdentifier;
    protected $_name = [
        'conditions'          => 'conditions',
        'directoryIdentifier' => 'directoryIdentifier',
        'maxResult'           => 'maxResult',
        'nextToken'           => 'nextToken',
        'spaceIdentifier'     => 'spaceIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['conditions'] = $this->conditions;
        }
        if (null !== $this->directoryIdentifier) {
            $res['directoryIdentifier'] = $this->directoryIdentifier;
        }
        if (null !== $this->maxResult) {
            $res['maxResult'] = $this->maxResult;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTestcaseListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['conditions'])) {
            $model->conditions = $map['conditions'];
        }
        if (isset($map['directoryIdentifier'])) {
            $model->directoryIdentifier = $map['directoryIdentifier'];
        }
        if (isset($map['maxResult'])) {
            $model->maxResult = $map['maxResult'];
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }

        return $model;
    }
}
