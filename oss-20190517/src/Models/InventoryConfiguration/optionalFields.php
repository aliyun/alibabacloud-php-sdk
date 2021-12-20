<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\InventoryConfiguration;

use AlibabaCloud\Tea\Model;

class optionalFields extends Model
{
    /**
     * @description field list
     *
     * @var string[]
     */
    public $fields;
    protected $_name = [
        'fields' => 'Field',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fields) {
            $res['Field'] = $this->fields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return optionalFields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Field'])) {
            if (!empty($map['Field'])) {
                $model->fields = $map['Field'];
            }
        }

        return $model;
    }
}
