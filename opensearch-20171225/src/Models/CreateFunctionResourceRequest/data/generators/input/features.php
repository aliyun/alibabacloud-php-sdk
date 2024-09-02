<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\CreateFunctionResourceRequest\data\generators\input;

use AlibabaCloud\Tea\Model;

class features extends Model
{
    /**
     * @description The name of the feature.
     *
     * @example system_item_id
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the feature.
     *
     * Valid values:
     *
     *   item
     *
     * <!-- -->
     *
     *   user
     *
     * <!-- -->
     * @example item
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return features
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
