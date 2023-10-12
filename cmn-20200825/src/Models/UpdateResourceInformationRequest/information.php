<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateResourceInformationRequest;

use AlibabaCloud\Tea\Model;

class information extends Model
{
    /**
     * @description 键
     *
     * @example IP
     *
     * @var string
     */
    public $key;

    /**
     * @description 键动作
     *
     * @example /xxx/zzz
     *
     * @var string
     */
    public $keyAction;

    /**
     * @description 键属性
     *
     * @example IP地址
     *
     * @var string
     */
    public $keyAttribute;

    /**
     * @description 键描述
     *
     * @example Ip地址
     *
     * @var string
     */
    public $keyDescription;

    /**
     * @description 建设项目id
     *
     * @example adaieaoweif_s3834
     *
     * @var string
     */
    public $setupProjectId;
    protected $_name = [
        'key'            => 'Key',
        'keyAction'      => 'KeyAction',
        'keyAttribute'   => 'KeyAttribute',
        'keyDescription' => 'KeyDescription',
        'setupProjectId' => 'SetupProjectId',
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
        if (null !== $this->setupProjectId) {
            $res['SetupProjectId'] = $this->setupProjectId;
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
        if (isset($map['SetupProjectId'])) {
            $model->setupProjectId = $map['SetupProjectId'];
        }

        return $model;
    }
}
