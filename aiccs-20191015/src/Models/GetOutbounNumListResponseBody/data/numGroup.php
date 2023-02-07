<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetOutbounNumListResponseBody\data;

use AlibabaCloud\Tea\Model;

class numGroup extends Model
{
    /**
     * @example Jella
     *
     * @var string
     */
    public $description;

    /**
     * @example 2
     *
     * @var int
     */
    public $type;

    /**
     * @example 7688****
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'description' => 'Description',
        'type'        => 'Type',
        'value'       => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
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
     * @return numGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
