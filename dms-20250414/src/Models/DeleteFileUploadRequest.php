<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DeleteFileUploadRequest extends Model
{
    /**
     * @var string
     */
    public $callFrom;

    /**
     * @var string
     */
    public $dmsUnit;

    /**
     * @var string
     */
    public $fileId;
    protected $_name = [
        'callFrom' => 'CallFrom',
        'dmsUnit' => 'DmsUnit',
        'fileId' => 'FileId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callFrom) {
            $res['CallFrom'] = $this->callFrom;
        }

        if (null !== $this->dmsUnit) {
            $res['DmsUnit'] = $this->dmsUnit;
        }

        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
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
        if (isset($map['CallFrom'])) {
            $model->callFrom = $map['CallFrom'];
        }

        if (isset($map['DmsUnit'])) {
            $model->dmsUnit = $map['DmsUnit'];
        }

        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }

        return $model;
    }
}
