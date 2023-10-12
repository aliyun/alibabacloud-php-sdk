<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemResponseBody\checkItems;

use AlibabaCloud\Tea\Model;

class description extends Model
{
    /**
     * @description The type of the description of the check item. Valid value:
     *
     *   **text**
     *
     * @example text
     *
     * @var string
     */
    public $type;

    /**
     * @description The content of the description for the check item when the Type parameter is text.
     *
     * @example The download of query results that are returned by SELECT statements in DataStudio must be prohibited at the MaxCompute level.
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'type'  => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return description
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
