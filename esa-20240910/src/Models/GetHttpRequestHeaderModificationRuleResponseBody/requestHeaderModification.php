<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetHttpRequestHeaderModificationRuleResponseBody;

use AlibabaCloud\Tea\Model;

class requestHeaderModification extends Model
{
    /**
     * @description Request header name.
     *
     * @example headerName
     *
     * @var string
     */
    public $name;

    /**
     * @description Operation method. Possible values:
     *
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
     * @description Request header value.
     *
     * @example headValue
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
     * @return requestHeaderModification
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
