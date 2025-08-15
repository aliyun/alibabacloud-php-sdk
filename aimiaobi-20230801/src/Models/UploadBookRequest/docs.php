<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UploadBookRequest;

use AlibabaCloud\Dara\Model;

class docs extends Model
{
    /**
     * @var string
     */
    public $docName;

    /**
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'docName' => 'DocName',
        'fileUrl' => 'FileUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->docName) {
            $res['DocName'] = $this->docName;
        }

        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
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
        if (isset($map['DocName'])) {
            $model->docName = $map['DocName'];
        }

        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        return $model;
    }
}
