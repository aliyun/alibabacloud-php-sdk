<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models;

use AlibabaCloud\Tea\Model;

class DeleteDocumentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $docIds;

    /**
     * @description This parameter is required.
     *
     * @example 3akzl28vap
     *
     * @var string
     */
    public $libraryId;
    protected $_name = [
        'docIds'    => 'docIds',
        'libraryId' => 'libraryId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docIds) {
            $res['docIds'] = $this->docIds;
        }
        if (null !== $this->libraryId) {
            $res['libraryId'] = $this->libraryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteDocumentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['docIds'])) {
            if (!empty($map['docIds'])) {
                $model->docIds = $map['docIds'];
            }
        }
        if (isset($map['libraryId'])) {
            $model->libraryId = $map['libraryId'];
        }

        return $model;
    }
}
