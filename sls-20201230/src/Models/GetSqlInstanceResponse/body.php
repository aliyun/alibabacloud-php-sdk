<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\GetSqlInstanceResponse;

use AlibabaCloud\Dara\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $cu;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var bool
     */
    public $useAsDefault;
    protected $_name = [
        'name' => 'name',
        'cu' => 'cu',
        'createTime' => 'createTime',
        'updateTime' => 'updateTime',
        'useAsDefault' => 'useAsDefault',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
