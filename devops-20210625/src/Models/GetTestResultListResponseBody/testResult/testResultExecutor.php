<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetTestResultListResponseBody\testResult;

use AlibabaCloud\Tea\Model;

class testResultExecutor extends Model
{
    /**
     * @var string
     */
    public $executorIdentifier;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'executorIdentifier' => 'executorIdentifier',
        'name'               => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executorIdentifier) {
            $res['executorIdentifier'] = $this->executorIdentifier;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return testResultExecutor
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['executorIdentifier'])) {
            $model->executorIdentifier = $map['executorIdentifier'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
