<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetSourceResponseBody;

use AlibabaCloud\Dara\Model;

class unstructuredDocs extends Model
{
    /**
     * @var string
     */
    public $completionTime;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileRecordId;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $ossUrl;

    /**
     * @var string
     */
    public $semanticsId;
    protected $_name = [
        'completionTime' => 'completionTime',
        'fileName' => 'fileName',
        'fileRecordId' => 'fileRecordId',
        'fileType' => 'fileType',
        'ossUrl' => 'ossUrl',
        'semanticsId' => 'semanticsId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->completionTime) {
            $res['completionTime'] = $this->completionTime;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->fileRecordId) {
            $res['fileRecordId'] = $this->fileRecordId;
        }

        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }

        if (null !== $this->ossUrl) {
            $res['ossUrl'] = $this->ossUrl;
        }

        if (null !== $this->semanticsId) {
            $res['semanticsId'] = $this->semanticsId;
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
        if (isset($map['completionTime'])) {
            $model->completionTime = $map['completionTime'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['fileRecordId'])) {
            $model->fileRecordId = $map['fileRecordId'];
        }

        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }

        if (isset($map['ossUrl'])) {
            $model->ossUrl = $map['ossUrl'];
        }

        if (isset($map['semanticsId'])) {
            $model->semanticsId = $map['semanticsId'];
        }

        return $model;
    }
}
