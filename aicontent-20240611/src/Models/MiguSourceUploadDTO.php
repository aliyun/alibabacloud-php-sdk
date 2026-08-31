<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Dara\Model;

class MiguSourceUploadDTO extends Model
{
    /**
     * @var string
     */
    public $expiresAt;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'expiresAt' => 'expiresAt',
        'fileType' => 'fileType',
        'sourceId' => 'sourceId',
        'uploadUrl' => 'uploadUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiresAt) {
            $res['expiresAt'] = $this->expiresAt;
        }

        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->uploadUrl) {
            $res['uploadUrl'] = $this->uploadUrl;
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
        if (isset($map['expiresAt'])) {
            $model->expiresAt = $map['expiresAt'];
        }

        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['uploadUrl'])) {
            $model->uploadUrl = $map['uploadUrl'];
        }

        return $model;
    }
}
