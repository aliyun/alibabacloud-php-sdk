<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListNacosHistoryConfigsResponseBody;

use AlibabaCloud\Dara\Model;

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

    /**
     * @var string
     */
    public $srcUser;
    protected $_name = [
        'appName' => 'AppName',
        'dataId' => 'DataId',
        'group' => 'Group',
        'id' => 'Id',
        'lastModifiedTime' => 'LastModifiedTime',
        'opType' => 'OpType',
        'srcUser' => 'SrcUser',
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

        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->opType) {
            $res['OpType'] = $this->opType;
        }

        if (null !== $this->srcUser) {
            $res['SrcUser'] = $this->srcUser;
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

        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }

        if (isset($map['OpType'])) {
            $model->opType = $map['OpType'];
        }

        if (isset($map['SrcUser'])) {
            $model->srcUser = $map['SrcUser'];
        }

        return $model;
    }
}
