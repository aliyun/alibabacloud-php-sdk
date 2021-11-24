<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosHistoryConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class historyItems extends Model
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
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $lastModifiedTime;

    /**
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
