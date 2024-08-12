<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;

class GetParseResultRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 873648346573245
     *
     * @var string
     */
    public $docId;

    /**
     * @description This parameter is required.
     *
     * @example sjdgdsfg
     *
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'docId'     => 'docId',
        'libraryId' => 'libraryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docId) {
            $res['docId'] = $this->docId;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetParseResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docId'])) {
            $model->docId = $map['docId'];
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        return $model;
    }
}
