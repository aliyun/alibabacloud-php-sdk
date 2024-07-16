<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models;

use AlibabaCloud\Tea\Model;

class DeleteIndexDocumentRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $documentIds;

    /**
     * @description This parameter is required.
     *
     * @example 79c0aly8zw
     *
     * @var string
     */
    public $indexId;
    protected $_name = [
        'documentIds' => 'DocumentIds',
        'indexId'     => 'IndexId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentIds) {
            $res['DocumentIds'] = $this->documentIds;
        }
        if (null !== $this->indexId) {
            $res['IndexId'] = $this->indexId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteIndexDocumentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocumentIds'])) {
            if (!empty($map['DocumentIds'])) {
                $model->documentIds = $map['DocumentIds'];
            }
        }
        if (isset($map['IndexId'])) {
            $model->indexId = $map['IndexId'];
        }

        return $model;
    }
}
