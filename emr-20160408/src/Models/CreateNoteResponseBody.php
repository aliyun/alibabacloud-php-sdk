<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class CreateNoteResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $paragraph;
    protected $_name = [
        'requestId' => 'RequestId',
        'id'        => 'Id',
        'paragraph' => 'Paragraph',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->paragraph) {
            $res['Paragraph'] = $this->paragraph;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNoteResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Paragraph'])) {
            $model->paragraph = $map['Paragraph'];
        }

        return $model;
    }
}
