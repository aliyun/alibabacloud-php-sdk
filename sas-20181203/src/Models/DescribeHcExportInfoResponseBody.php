<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeHcExportInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentCount;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $link;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $resultStatus;

    /**
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
