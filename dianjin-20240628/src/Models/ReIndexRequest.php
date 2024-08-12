<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;

class ReIndexRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 8326472354762354
     *
     * @var string
     */
    public $documentId;
    protected $_name = [
        'documentId' => 'documentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentId) {
            $res['documentId'] = $this->documentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReIndexRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['documentId'])) {
            $model->documentId = $map['documentId'];
        }

        return $model;
    }
}
