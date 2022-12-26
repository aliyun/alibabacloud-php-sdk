<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSuspEventExportInfoResponseBody extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $exportStatus;

    /**
     * @example suspicious_event_20221221_1671590521234.zip
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 2022-12-20T15:18Z
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 2022-12-20T15:18Z
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example 11
     *
     * @var int
     */
    public $id;

    /**
     * @example http://suspicious-xxxxxxx.oss-cn-shanghai.aliyuncs.com/xxxxxxxxxxx/suspicious_event_20221221_1671590525269.zip?Expires=1671594125&OSSAccessKeyId=LTAIxxxxxxxxxxxxxx&Signature=xxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $link;

    /**
     * @example 100
     *
     * @var int
     */
    public $progress;

    /**
     * @example id,eventSubType,eventDetail,level,status,ip,instanceName,desc,lastTime,operateTime,note
     *
     * @var string
     */
    public $properties;

    /**
     * @example BE120DAB-F4E7-4C53-ADC3-A97578AXXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @example suspiciousEvent
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'exportStatus' => 'ExportStatus',
        'fileName'     => 'FileName',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'link'         => 'Link',
        'progress'     => 'Progress',
        'properties'   => 'Properties',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportStatus) {
            $res['ExportStatus'] = $this->exportStatus;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->link) {
            $res['Link'] = $this->link;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspEventExportInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportStatus'])) {
            $model->exportStatus = $map['ExportStatus'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Link'])) {
            $model->link = $map['Link'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
