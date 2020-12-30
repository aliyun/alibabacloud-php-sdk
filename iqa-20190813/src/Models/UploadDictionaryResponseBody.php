<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iqa\V20190813\Models;

use AlibabaCloud\Tea\Model;

class UploadDictionaryResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var int
     */
    public $fileDataCount;

    /**
     * @var int
     */
    public $jsonDataCount;
    protected $_name = [
        'totalCount'    => 'TotalCount',
        'requestId'     => 'RequestId',
        'projectId'     => 'ProjectId',
        'fileDataCount' => 'FileDataCount',
        'jsonDataCount' => 'JsonDataCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->fileDataCount) {
            $res['FileDataCount'] = $this->fileDataCount;
        }
        if (null !== $this->jsonDataCount) {
            $res['JsonDataCount'] = $this->jsonDataCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadDictionaryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['FileDataCount'])) {
            $model->fileDataCount = $map['FileDataCount'];
        }
        if (isset($map['JsonDataCount'])) {
            $model->jsonDataCount = $map['JsonDataCount'];
        }

        return $model;
    }
}
