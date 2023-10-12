<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ResourceInformation;

use AlibabaCloud\Tea\Model;

class information extends Model
{
    /**
     * @example ip
     *
     * @var string
     */
    public $key;

    /**
     * @example /xxx/zzz
     *
     * @var string
     */
    public $keyAction;

    /**
     * @example IP地址
     *
     * @var string
     */
    public $keyAttribute;

    /**
     * @example IP地址
     *
     * @var string
     */
    public $keyDescription;
    protected $_name = [
        'key'            => 'Key',
        'keyAction'      => 'KeyAction',
        'keyAttribute'   => 'KeyAttribute',
        'keyDescription' => 'KeyDescription',
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
        if (null !== $this->keyAction) {
            $res['KeyAction'] = $this->keyAction;
        }
        if (null !== $this->keyAttribute) {
            $res['KeyAttribute'] = $this->keyAttribute;
        }
        if (null !== $this->keyDescription) {
            $res['KeyDescription'] = $this->keyDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return information
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['KeyAction'])) {
            $model->keyAction = $map['KeyAction'];
        }
        if (isset($map['KeyAttribute'])) {
            $model->keyAttribute = $map['KeyAttribute'];
        }
        if (isset($map['KeyDescription'])) {
            $model->keyDescription = $map['KeyDescription'];
        }

        return $model;
    }
}
