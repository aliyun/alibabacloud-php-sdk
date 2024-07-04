<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\GetIndexJobStatusResponseBody\data;

use AlibabaCloud\Tea\Model;

class documents extends Model
{
    /**
     * @example Index.Document.ChunkError
     *
     * @var string
     */
    public $code;

    /**
     * @example file_9a65732555b54d5ea10796ca5742ba22_XXXXXXXX
     *
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $docName;

    /**
     * @example document parse error
     *
     * @var string
     */
    public $message;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'code'    => 'Code',
        'docId'   => 'DocId',
        'docName' => 'DocName',
        'message' => 'Message',
        'status'  => 'Status',
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
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->docName) {
            $res['DocName'] = $this->docName;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return documents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['DocName'])) {
            $model->docName = $map['DocName'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
