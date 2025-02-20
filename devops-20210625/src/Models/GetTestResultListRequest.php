<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class GetTestResultListRequest extends Model
{
    /**
     * @var string
     */
    public $conditions;
    /**
     * @var string
     */
    public $directoryIdentifier;
    protected $_name = [
        'conditions'          => 'conditions',
        'directoryIdentifier' => 'directoryIdentifier',
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

        return $model;
    }
}
