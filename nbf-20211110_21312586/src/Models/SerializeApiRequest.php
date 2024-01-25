<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NBF\V20211110_21312586\Models;

use AlibabaCloud\Tea\Model;

class SerializeApiRequest extends Model
{
    /**
     * @var string
     */
    public $apiSchemaDTO;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'apiSchemaDTO' => 'apiSchemaDTO',
        'type'         => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiSchemaDTO) {
            $res['apiSchemaDTO'] = $this->apiSchemaDTO;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SerializeApiRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['apiSchemaDTO'])) {
            $model->apiSchemaDTO = $map['apiSchemaDTO'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
