<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemEstimateResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemEstimateResponseBody\workitemTimeEstimate\recordUser;
use AlibabaCloud\Tea\Model;

class workitemTimeEstimate extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example deafe5f33xxxxx6a259d8dafd
     *
     * @var string
     */
    public $identifier;

    /**
     * @var recordUser
     */
    public $recordUser;

    /**
     * @example 11
     *
     * @var int
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
        'description'        => 'description',
        'identifier'         => 'identifier',
        'recordUser'         => 'recordUser',
        'spentTime'          => 'spentTime',
        'type'               => 'type',
        'workitemIdentifier' => 'workitemIdentifier',
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
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->recordUser) {
            $res['recordUser'] = null !== $this->recordUser ? $this->recordUser->toMap() : null;
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
     * @return workitemTimeEstimate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['recordUser'])) {
            $model->recordUser = recordUser::fromMap($map['recordUser']);
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
