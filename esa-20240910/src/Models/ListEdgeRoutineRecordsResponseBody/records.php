<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListEdgeRoutineRecordsResponseBody;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example 2023-12-24T02:01:11Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example a.example.com.cnamezone.com
     *
     * @var string
     */
    public $recordCname;

    /**
     * @example a.example.com
     *
     * @var string
     */
    public $recordName;

    /**
     * @example 5407498413****
     *
     * @var int
     */
    public $siteId;

    /**
     * @example example.com
     *
     * @var string
     */
    public $siteName;

    /**
     * @example 2023-12-22T08:32:02Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'recordCname' => 'RecordCname',
        'recordName'  => 'RecordName',
        'siteId'      => 'SiteId',
        'siteName'    => 'SiteName',
        'updateTime'  => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->recordCname) {
            $res['RecordCname'] = $this->recordCname;
        }
        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['RecordCname'])) {
            $model->recordCname = $map['RecordCname'];
        }
        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
