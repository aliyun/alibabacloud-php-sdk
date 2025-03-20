<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpResponseHeaderModificationRulesResponseBody\configs;

use AlibabaCloud\Tea\Model;

class responseHeaderModification extends Model
{
    /**
     * @description Name of the response header.
     *
     * @example headerName
     *
     * @var string
     */
    public $name;

    /**
     * @description Operation type. The value range is as follows:
     * - add: Add.
     * - del: Delete
     * - modify: Modify.
     *
     * @example add
     *
     * @var string
     */
    public $operation;

    /**
     * @description Response header value.
     *
     * @example headerValue
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name' => 'Name',
        'operation' => 'Operation',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responseHeaderModification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
