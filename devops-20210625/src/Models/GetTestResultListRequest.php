<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class GetTestResultListRequest extends Model
{
    /**
     * @example {\"conditionGroups\": [[{\"fieldIdentifier\": \"gmtModified\", \"operator\": \"MORE_THAN_AND_EQUAL\", \"value\": [\"2023-04-20 18:03:12.442140\"], \"className\": \"dateTime\", \"format\": \"input\"}]]}
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
    protected $_name = [
        'conditions'          => 'conditions',
        'directoryIdentifier' => 'directoryIdentifier',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTestResultListRequest
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

        return $model;
    }
}
