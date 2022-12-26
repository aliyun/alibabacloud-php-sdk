<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListPluginForUuidShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $typesShrink;

    /**
     * @example bdb7071f-129d-4ceb-af80-4cf70c4571c6
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'typesShrink' => 'Types',
        'uuid'        => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->typesShrink) {
            $res['Types'] = $this->typesShrink;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPluginForUuidShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Types'])) {
            $model->typesShrink = $map['Types'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
