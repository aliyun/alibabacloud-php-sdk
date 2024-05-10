<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListPluginForUuidRequest extends Model
{
    /**
     * @description The plug-in types.
     *
     * @var string[]
     */
    public $types;

    /**
     * @description The UUID of the server.
     *
     * This parameter is required.
     * @example bdb7071f-129d-4ceb-af80-4cf70c4571c6
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'types' => 'Types',
        'uuid'  => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPluginForUuidRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
