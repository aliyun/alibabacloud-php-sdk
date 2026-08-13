<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\SendChatMessageRequest;

use AlibabaCloud\Dara\Model;

class files extends Model
{
    /**
     * @var string
     */
    public $fileId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'fileId' => 'fileId',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['fileId'] = $this->fileId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['fileId'])) {
            $model->fileId = $map['fileId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
