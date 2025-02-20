<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemEstimateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateWorkitemEstimateResponseBody\workitemTimeEstimate\recordUser;

class workitemTimeEstimate extends Model
{
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var recordUser
     */
    public $recordUser;
    /**
     * @var int
     */
    public $spentTime;
    /**
     * @var string
     */
    public $type;
    /**
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
        if (null !== $this->recordUser) {
            $this->recordUser->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->recordUser) {
            $res['recordUser'] = null !== $this->recordUser ? $this->recordUser->toArray($noStream) : $this->recordUser;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
