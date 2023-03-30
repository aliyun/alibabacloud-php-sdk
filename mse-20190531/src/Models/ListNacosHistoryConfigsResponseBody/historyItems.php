<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosHistoryConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class historyItems extends Model
{
    /**
     * @description The application tag.
     *
     * @example gateway
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the data.
     *
     * @example test.yaml
     *
     * @var string
     */
    public $dataId;

    /**
     * @description The name of the group.
     *
     * @example default
     *
     * @var string
     */
    public $group;

    /**
     * @description The ID of the configuration.
     *
     * @example 23fdsf
     *
     * @var int
     */
    public $id;

    /**
     * @description The timestamp when the configuration was last modified.
     *
     * @example 16434400
     *
     * @var int
     */
    public $lastModifiedTime;

    /**
     * @description The format of the configuration file.
     *
     * @example yaml
     *
     * @var string
     */
    public $opType;
    protected $_name = [
        'appName'          => 'AppName',
        'dataId'           => 'DataId',
        'group'            => 'Group',
        'id'               => 'Id',
        'lastModifiedTime' => 'LastModifiedTime',
        'opType'           => 'OpType',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return historyItems
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
        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }
        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }

        return $model;
    }
}
