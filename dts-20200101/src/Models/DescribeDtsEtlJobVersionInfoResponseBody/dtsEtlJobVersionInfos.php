<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsEtlJobVersionInfoResponseBody;

use AlibabaCloud\Tea\Model;

class dtsEtlJobVersionInfos extends Model
{
    /**
     * @description The time when the ETL task was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1637229315000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the creator.
     *
     * @example 10000000
     *
     * @var string
     */
    public $creator;

    /**
     * @description The username of the creator.
     *
     * @example ***@****.com
     *
     * @var string
     */
    public $creatorName;

    /**
     * @description The ID of the DTS instance.
     *
     * @example dtsg******gd
     *
     * @var string
     */
    public $dtsInstanceId;

    /**
     * @description The ID of the ETL task.
     *
     * @example l5512es7w15****
     *
     * @var string
     */
    public $dtsJobId;

    /**
     * @description The name of the ETL task.
     *
     * @example test_sql
     *
     * @var string
     */
    public $dtsJobName;

    /**
     * @description The time when the ETL task was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1637230117000
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The safe checkpoint of the ETL task.
     *
     * @example 1637230117000
     *
     * @var string
     */
    public $safeCheckpoint;

    /**
     * @description The log level. Valid values: ERROR, WARN, INFO, and DEBUG.
     *
     * @example INFO
     *
     * @var string
     */
    public $status;

    /**
     * @description The version number of the ETL task.
     *
     * @example 9
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'creator'        => 'Creator',
        'creatorName'    => 'CreatorName',
        'dtsInstanceId'  => 'DtsInstanceId',
        'dtsJobId'       => 'DtsJobId',
        'dtsJobName'     => 'DtsJobName',
        'modifyTime'     => 'ModifyTime',
        'safeCheckpoint' => 'SafeCheckpoint',
        'status'         => 'Status',
        'version'        => 'Version',
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
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->dtsInstanceId) {
            $res['DtsInstanceId'] = $this->dtsInstanceId;
        }
        if (null !== $this->dtsJobId) {
            $res['DtsJobId'] = $this->dtsJobId;
        }
        if (null !== $this->dtsJobName) {
            $res['DtsJobName'] = $this->dtsJobName;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->safeCheckpoint) {
            $res['SafeCheckpoint'] = $this->safeCheckpoint;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dtsEtlJobVersionInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['DtsInstanceId'])) {
            $model->dtsInstanceId = $map['DtsInstanceId'];
        }
        if (isset($map['DtsJobId'])) {
            $model->dtsJobId = $map['DtsJobId'];
        }
        if (isset($map['DtsJobName'])) {
            $model->dtsJobName = $map['DtsJobName'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['SafeCheckpoint'])) {
            $model->safeCheckpoint = $map['SafeCheckpoint'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
