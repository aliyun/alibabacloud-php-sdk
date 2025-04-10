<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\GetIndexJobStatusResponseBody\data;

use AlibabaCloud\Dara\Model;

class documents extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $docId;

    /**
     * @var string
     */
    public $docName;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'code' => 'Code',
        'docId' => 'DocId',
        'docName' => 'DocName',
        'gmtModified' => 'GmtModified',
        'message' => 'Message',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
