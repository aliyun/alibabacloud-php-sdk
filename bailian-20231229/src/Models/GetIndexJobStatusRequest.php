<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class GetIndexJobStatusRequest extends Model
{
    /**
     * @description The primary key ID of the knowledge base, which is the `Data.Id` parameter returned by the [CreateIndex](https://help.aliyun.com/zh/model-studio/developer-reference/api-bailian-2023-12-29-createindex) operation.
     *
     * This parameter is required.
     * @example 79c0aly8zw
     *
     * @var string
     */
    public $indexId;

    /**
     * @description The knowledge base job ID, which is the `Data.Id` parameter returned by the [SubmitIndexJob](https://help.aliyun.com/zh/model-studio/developer-reference/api-bailian-2023-12-29-submitindexjob) or [SubmitIndexAddDocumentsJob](https://help.aliyun.com/zh/model-studio/developer-reference/api-bailian-2023-12-29-submitindexadddocumentsjob) operations.
     *
     * This parameter is required.
     * @example 20230718xxxx-146c93bf
     *
     * @var string
     */
    public $jobId;

    /**
     * @description Both the [SubmitIndexJob](https://help.aliyun.com/zh/model-studio/developer-reference/api-bailian-2023-12-29-submitindexjob) and [SubmitIndexAddDocumentsJob](https://help.aliyun.com/zh/model-studio/developer-reference/api-bailian-2023-12-29-submitindexadddocumentsjob) operations support batch import of documents. This operation returns both the overall `Status` of the job and the `Document.Status` of each document. If there are a large number of documents, you can use the `PageNumber` parameter to perform a paged query. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of document import jobs that are displayed on each page. No maximum value. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'indexId'    => 'IndexId',
        'jobId'      => 'JobId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'pageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIndexJobStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
