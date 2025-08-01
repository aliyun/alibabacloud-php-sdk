<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class configurations extends Model
{
    /**
     * @description The name of the application.
     *
     * @example test
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the configuration.
     *
     * @example log.yaml
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The ID of the group.
     *
     * @example public
     *
     * @var string
     */
    public $group;

    /**
     * @description The ID of the application.
     *
     * @example 132****
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'appName' => 'AppName',
        'dataId' => 'DataId',
        'group' => 'Group',
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return configurations
     */
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
