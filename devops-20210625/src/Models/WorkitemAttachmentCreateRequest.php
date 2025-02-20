<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class WorkitemAttachmentCreateRequest extends Model
{
    /**
     * @var string
     */
    public $fileKey;
    /**
     * @var string
     */
    public $originalFilename;
    protected $_name = [
        'fileKey'          => 'fileKey',
        'originalFilename' => 'originalFilename',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileKey) {
            $res['fileKey'] = $this->fileKey;
        }

        if (null !== $this->originalFilename) {
            $res['originalFilename'] = $this->originalFilename;
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
        if (isset($map['fileKey'])) {
            $model->fileKey = $map['fileKey'];
        }

        if (isset($map['originalFilename'])) {
            $model->originalFilename = $map['originalFilename'];
        }

        return $model;
    }
}
