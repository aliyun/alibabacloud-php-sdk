<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafGroupsResponseBody\wafGroups;

use AlibabaCloud\Tea\Model;

class policies extends Model
{
    /**
     * @description The ID of the policy.
     *
     * @example 30000165
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the policy.
     *
     * @example wasm-testmaster
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the policy. Valid values:
     *
     *   **custom**: a custom policy
     *   **default**: the default policy
     *
     * @example default
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id'   => 'Id',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
