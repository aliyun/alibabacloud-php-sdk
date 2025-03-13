<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetTestcaseListResponseBody\testcase;

use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @example 85702b33f14bxxxxxx58173ba
     *
     * @var string
     */
    public $tagIdentifier;
    protected $_name = [
        'name'          => 'name',
        'tagIdentifier' => 'tagIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->tagIdentifier) {
            $res['tagIdentifier'] = $this->tagIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['tagIdentifier'])) {
            $model->tagIdentifier = $map['tagIdentifier'];
        }

        return $model;
    }
}
