<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GetOSSBucketAttachmentResponseBody extends Model
{
    /**
     * @description The time when the dataset was created.
     *
     * @example ""2023-12-19T17:29:34.790931971+08:00"
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the dataset.
     *
     * @example "Dataset"
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the project.
     *
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The request ID.
     *
     * @example 5F74C5C9-5AC0-49F9-914D-E01589D3****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the dataset was last updated.
     *
     * @example "2023-12-19T17:29:34.790931971+08:00"
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'description' => 'Description',
        'projectName' => 'ProjectName',
        'requestId'   => 'RequestId',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOSSBucketAttachmentResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
