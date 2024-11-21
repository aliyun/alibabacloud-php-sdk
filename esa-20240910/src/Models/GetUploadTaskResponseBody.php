<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetUploadTaskResponseBody extends Model
{
    /**
     * @description The error message returned when the file upload task failed.
     *
     * @example invalid url
     *
     * @var string
     */
    public $description;

    /**
     * @description The request ID.
     *
     * @example ET5BF670-09D5-4D0B-BEBY-D96A2A52****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The task status.
     *
     *   **INIT**: The task is being initialized.
     *   **activacted**: The task is activated.
     *   **running**: The task is running.
     *   **success**: The task is successful.
     *   **partial**: The task is partially successful.
     *   **fail**: The task failed.
     *
     * @example running
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description' => 'Description',
        'requestId'   => 'RequestId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return GetUploadTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
