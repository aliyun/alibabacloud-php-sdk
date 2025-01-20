<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosConfigsResponseBody;

use AlibabaCloud\Dara\Model;

class configurations extends Model
{
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string
     */
    public $dataId;
    /**
     * @var string
     */
    public $group;
    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'appName' => 'AppName',
        'dataId'  => 'DataId',
        'group'   => 'Group',
        'id'      => 'Id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
