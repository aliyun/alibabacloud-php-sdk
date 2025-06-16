<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\FileUploadResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $uploadedFileUrl;
    protected $_name = [
        'uploadedFileUrl' => 'uploaded_file_url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->uploadedFileUrl) {
            $res['uploaded_file_url'] = $this->uploadedFileUrl;
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
        if (isset($map['uploaded_file_url'])) {
            $model->uploadedFileUrl = $map['uploaded_file_url'];
        }

        return $model;
    }
}
