<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ListCdsFilesResponseBody\fileModels;
use AlibabaCloud\Tea\Model;

class ListCdsFilesResponseBody extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @example 0
     *
     * @var string
     */
    public $count;

    /**
     * @var fileModels[]
     */
    public $fileModels;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example WyI2MzhmMjA2ZTFmZGZlZGVjZDk3OTRlNzVhZmIwMDFiZmM5NWQ3YTgwIiwibiIsIm4iLDEsLTEsMTY3MDMyNDMzNTAzMSwiNjM4ZjIwNmZjNDFkMzIwOTZmZWU0NGYxODkwY2I5ZjI0Mjg0NzM2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 40D86754-20FD-53DC-A9B8-25F7FECC****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'       => 'Code',
        'count'      => 'Count',
        'fileModels' => 'FileModels',
        'message'    => 'Message',
        'nextToken'  => 'NextToken',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->fileModels) {
            $res['FileModels'] = [];
            if (null !== $this->fileModels && \is_array($this->fileModels)) {
                $n = 0;
                foreach ($this->fileModels as $item) {
                    $res['FileModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCdsFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['FileModels'])) {
            if (!empty($map['FileModels'])) {
                $model->fileModels = [];
                $n                 = 0;
                foreach ($map['FileModels'] as $item) {
                    $model->fileModels[$n++] = null !== $item ? fileModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
