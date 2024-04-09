<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetSqlInstanceResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @example project_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 2
     *
     * @var int
     */
    public $cu;

    /**
     * @example 1710230272
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1710230272
     *
     * @var int
     */
    public $updateTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $useAsDefault;
    protected $_name = [
        'name'         => 'name',
        'cu'           => 'cu',
        'createTime'   => 'createTime',
        'updateTime'   => 'updateTime',
        'useAsDefault' => 'useAsDefault',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }
        if (null !== $this->useAsDefault) {
            $res['useAsDefault'] = $this->useAsDefault;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }
        if (isset($map['useAsDefault'])) {
            $model->useAsDefault = $map['useAsDefault'];
        }

        return $model;
    }
}
