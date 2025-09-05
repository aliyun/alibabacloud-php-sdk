<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models\BatchAddFacesResponseBody\data;

use AlibabaCloud\Dara\Model;

class failedFaces extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $imageURL;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'code' => 'Code',
        'imageURL' => 'ImageURL',
        'message' => 'Message',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->imageURL) {
            $res['ImageURL'] = $this->imageURL;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ImageURL'])) {
            $model->imageURL = $map['ImageURL'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
