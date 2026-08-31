<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UploadDataSourceFileRequest\uploadCommand;

class UploadDataSourceFileRequest extends Model
{
    /**
     * @var int
     */
    public $opTenantId;

    /**
     * @var string
     */
    public $opUserId;

    /**
     * @var uploadCommand
     */
    public $uploadCommand;
    protected $_name = [
        'opTenantId' => 'OpTenantId',
        'opUserId' => 'OpUserId',
        'uploadCommand' => 'UploadCommand',
    ];

    public function validate()
    {
        if (null !== $this->uploadCommand) {
            $this->uploadCommand->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->opTenantId) {
            $res['OpTenantId'] = $this->opTenantId;
        }

        if (null !== $this->opUserId) {
            $res['OpUserId'] = $this->opUserId;
        }

        if (null !== $this->uploadCommand) {
            $res['UploadCommand'] = null !== $this->uploadCommand ? $this->uploadCommand->toArray($noStream) : $this->uploadCommand;
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
        if (isset($map['OpTenantId'])) {
            $model->opTenantId = $map['OpTenantId'];
        }

        if (isset($map['OpUserId'])) {
            $model->opUserId = $map['OpUserId'];
        }

        if (isset($map['UploadCommand'])) {
            $model->uploadCommand = uploadCommand::fromMap($map['UploadCommand']);
        }

        return $model;
    }
}
