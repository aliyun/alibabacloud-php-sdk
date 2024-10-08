<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeContainerAppRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @example kdxceo****.yun****.com
     *
     * @var string
     */
    public $cname;

    /**
     * @example 27522948436****
     *
     * @var int
     */
    public $configId;

    /**
     * @example 2023-12-24T02:01:11Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 266****
     *
     * @var int
     */
    public $recordId;

    /**
     * @example a.example.com
     *
     * @var string
     */
    public $recordName;

    /**
     * @example 123456
     *
     * @var int
     */
    public $schemdId;

    /**
     * @example 5407498413****
     *
     * @var int
     */
    public $siteId;

    /**
     * @example 2021-12-22T08:32:02Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'appId'      => 'AppId',
        'cname'      => 'Cname',
        'configId'   => 'ConfigId',
        'createTime' => 'CreateTime',
        'recordId'   => 'RecordId',
        'recordName' => 'RecordName',
        'schemdId'   => 'SchemdId',
        'siteId'     => 'SiteId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return records
     */
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
