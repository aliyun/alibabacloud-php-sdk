<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models\CreateErAttachmentResponseBody;

use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @description The ID of the network connection instance.
     *
     * @example er-attachment-ggjbfhqv
     *
     * @var string
     */
    public $erAttachmentId;
    protected $_name = [
        'erAttachmentId' => 'ErAttachmentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->erAttachmentId) {
            $res['ErAttachmentId'] = $this->erAttachmentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErAttachmentId'])) {
            $model->erAttachmentId = $map['ErAttachmentId'];
        }

        return $model;
    }
}
