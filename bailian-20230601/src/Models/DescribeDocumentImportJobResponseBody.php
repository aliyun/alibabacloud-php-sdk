<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\SDK\Bailian\V20230601\Models\DescribeDocumentImportJobResponseBody\docs;
use AlibabaCloud\Tea\Model;

class DescribeDocumentImportJobResponseBody extends Model
{
    /**
     * @var docs[]
     */
    public $docs;

    /**
     * @description Id of the request
     *
     * @example 20230718xxxx-146c93bf
     *
     * @var string
     */
    public $jobId;

    /**
     * @description Id of the request
     *
     * @example 35A267BF-xxxx-54DB-8394-AA3B0742D833
     *
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'docs'      => 'Docs',
        'jobId'     => 'JobId',
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docs) {
            $res['Docs'] = [];
            if (null !== $this->docs && \is_array($this->docs)) {
                $n = 0;
                foreach ($this->docs as $item) {
                    $res['Docs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDocumentImportJobResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Docs'])) {
            if (!empty($map['Docs'])) {
                $model->docs = [];
                $n           = 0;
                foreach ($map['Docs'] as $item) {
                    $model->docs[$n++] = null !== $item ? docs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
