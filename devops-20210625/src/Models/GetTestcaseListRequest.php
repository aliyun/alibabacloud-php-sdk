<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class GetTestcaseListRequest extends Model
{
    /**
     * @var string
     */
    public $conditions;
    /**
     * @var string
     */
    public $directoryIdentifier;
    /**
     * @var string
     */
    public $maxResult;
    /**
     * @var string
     */
    public $nextToken;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
