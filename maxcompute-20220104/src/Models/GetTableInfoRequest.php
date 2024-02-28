<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetTableInfoRequest extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $schemaName;

    /**
     * @example internal
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'schemaName' => 'schemaName',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schemaName) {
            $res['schemaName'] = $this->schemaName;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTableInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['schemaName'])) {
            $model->schemaName = $map['schemaName'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
