<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Column;

use AlibabaCloud\Tea\Model;

class businessMetadata extends Model
{
    /**
     * @example 字段1的业务描述
     *
     * @var string
     */
    public $description;
    protected $_name = [
        'description' => 'Description',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return businessMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        return $model;
    }
}
