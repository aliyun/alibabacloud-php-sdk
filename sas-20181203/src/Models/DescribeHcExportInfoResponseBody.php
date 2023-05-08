<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeHcExportInfoResponseBody extends Model
{
    /**
     * @example 148
     *
     * @var int
     */
    public $currentCount;

    /**
     * @example health_check_export_2022****
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 2022-11-03T15:15Z
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1082278
     *
     * @var int
     */
    public $id;

    /**
     * @example https://hc-export.oss-cn-shanghai.aliyuncs.com/export_hc/health_check_export_20221222_1671699255808.zip?Expires=1672304056&OSSAccessKeyId=****&Signature=****
     *
     * @var string
     */
    public $link;

    /**
     * @example 89
     *
     * @var int
     */
    public $progress;

    /**
     * @example 3C2C94CF-ED08-50C0-BC72-C5029251****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example exporting
     *
     * @var string
     */
    public $resultStatus;

    /**
     * @example 624
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentCount' => 'CurrentCount',
        'fileName'     => 'FileName',
        'gmtCreate'    => 'GmtCreate',
        'id'           => 'Id',
        'link'         => 'Link',
        'progress'     => 'Progress',
        'requestId'    => 'RequestId',
        'resultStatus' => 'ResultStatus',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentCount) {
            $res['CurrentCount'] = $this->currentCount;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resultStatus) {
            $res['ResultStatus'] = $this->resultStatus;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHcExportInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentCount'])) {
            $model->currentCount = $map['CurrentCount'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResultStatus'])) {
            $model->resultStatus = $map['ResultStatus'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
