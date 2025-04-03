<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartClipTaskResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetSmartClipTaskResponseBody\data\subJobs\fileAttr;

class subJobs extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var fileAttr
     */
    public $fileAttr;

    /**
     * @var string
     */
    public $fileKey;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subJobId;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'fileAttr' => 'FileAttr',
        'fileKey' => 'FileKey',
        'status' => 'Status',
        'subJobId' => 'SubJobId',
    ];

    public function validate()
    {
        if (null !== $this->fileAttr) {
            $this->fileAttr->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->fileAttr) {
            $res['FileAttr'] = null !== $this->fileAttr ? $this->fileAttr->toArray($noStream) : $this->fileAttr;
        }

        if (null !== $this->fileKey) {
            $res['FileKey'] = $this->fileKey;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subJobId) {
            $res['SubJobId'] = $this->subJobId;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['FileAttr'])) {
            $model->fileAttr = fileAttr::fromMap($map['FileAttr']);
        }

        if (isset($map['FileKey'])) {
            $model->fileKey = $map['FileKey'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubJobId'])) {
            $model->subJobId = $map['SubJobId'];
        }

        return $model;
    }
}
