<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListTestCaseFieldsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example e8bxxxxxxxxxxxxxxxx23
     *
     * @var string
     */
    public $spaceIdentifier;
    protected $_name = [
        'spaceIdentifier' => 'spaceIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTestCaseFieldsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }

        return $model;
    }
}
