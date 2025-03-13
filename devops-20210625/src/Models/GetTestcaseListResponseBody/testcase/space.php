<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody\testcase;

use AlibabaCloud\Tea\Model;

class space extends Model
{
    /**
     * @example 22c32972b853cd703dbf0efe4c
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @example TestRepo
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'spaceIdentifier' => 'spaceIdentifier',
        'type'            => 'type',
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return space
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
