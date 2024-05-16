<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DsgPlatformQueryProjectsAndSchemaFromMetaRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example EMR
     *
     * @var string
     */
    public $engineName;
    protected $_name = [
        'engineName' => 'EngineName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engineName) {
            $res['EngineName'] = $this->engineName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgPlatformQueryProjectsAndSchemaFromMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EngineName'])) {
            $model->engineName = $map['EngineName'];
        }

        return $model;
    }
}
