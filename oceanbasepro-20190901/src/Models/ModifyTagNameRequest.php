<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyTagNameRequest extends Model
{
    /**
     * @description The name of the tag group.
     *
     * This parameter is required.
     * @example Tag group 1
     *
     * @var string
     */
    public $key;

    /**
     * @description The new name of the tag group.
     *
     * This parameter is required.
     * @example Tag group 2
     *
     * @var string
     */
    public $newKey;
    protected $_name = [
        'key'    => 'Key',
        'newKey' => 'NewKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->newKey) {
            $res['NewKey'] = $this->newKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTagNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['NewKey'])) {
            $model->newKey = $map['NewKey'];
        }

        return $model;
    }
}
