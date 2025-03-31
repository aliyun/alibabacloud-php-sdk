<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var int
     */
    public $configId;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $recordId;

    /**
     * @var string
     */
    public $recordName;

    /**
     * @var int
     */
    public $schemdId;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'appId' => 'AppId',
        'cname' => 'Cname',
        'configId' => 'ConfigId',
        'createTime' => 'CreateTime',
        'recordId' => 'RecordId',
        'recordName' => 'RecordName',
        'schemdId' => 'SchemdId',
        'siteId' => 'SiteId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }

        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }

        if (null !== $this->schemdId) {
            $res['SchemdId'] = $this->schemdId;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }

        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }

        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }

        if (isset($map['SchemdId'])) {
            $model->schemdId = $map['SchemdId'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
