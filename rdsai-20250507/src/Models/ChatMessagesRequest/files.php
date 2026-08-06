<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\ChatMessagesRequest;

use AlibabaCloud\Dara\Model;

class files extends Model
{
    /**
     * @var string
     */
    public $transferMethod;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uploadFileId;
    protected $_name = [
        'transferMethod' => 'TransferMethod',
        'type' => 'Type',
        'uploadFileId' => 'UploadFileId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->transferMethod) {
            $res['TransferMethod'] = $this->transferMethod;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->uploadFileId) {
            $res['UploadFileId'] = $this->uploadFileId;
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
        if (isset($map['TransferMethod'])) {
            $model->transferMethod = $map['TransferMethod'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UploadFileId'])) {
            $model->uploadFileId = $map['UploadFileId'];
        }

        return $model;
    }
}
