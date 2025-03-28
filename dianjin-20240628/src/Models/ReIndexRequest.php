<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Dara\Model;

class ReIndexRequest extends Model
{
    /**
     * @var string
     */
    public $documentId;
    protected $_name = [
        'documentId' => 'documentId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->documentId) {
            $res['documentId'] = $this->documentId;
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
        if (isset($map['documentId'])) {
            $model->documentId = $map['documentId'];
        }

        return $model;
    }
}
