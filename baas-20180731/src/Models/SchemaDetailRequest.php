<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class SchemaDetailRequest extends Model
{
    /**
     * @var string
     */
    public $bizid;

    /**
     * @var int
     */
    public $schemaId;
    protected $_name = [
        'bizid'    => 'Bizid',
        'schemaId' => 'SchemaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizid) {
            $res['Bizid'] = $this->bizid;
        }
        if (null !== $this->schemaId) {
            $res['SchemaId'] = $this->schemaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SchemaDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizid'])) {
            $model->bizid = $map['Bizid'];
        }
        if (isset($map['SchemaId'])) {
            $model->schemaId = $map['SchemaId'];
        }

        return $model;
    }
}
