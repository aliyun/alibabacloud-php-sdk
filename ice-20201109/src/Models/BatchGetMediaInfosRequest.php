<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class BatchGetMediaInfosRequest extends Model
{
    /**
     * @description The additional information that you want to query about the media assets. By default, only BasicInfo is returned. The following additional information can be queried:
     *
     * \\- DynamicMetaData
     * @example FileInfo,DynamicMetaData
     *
     * @var string
     */
    public $additionType;

    /**
     * @description The IDs of the media assets that you want to query. Separate the IDs with commas (,).
     *
     * @example ******b48fb04483915d4f2cd8******,******c48fb37407365d4f2cd8******
     *
     * @var string
     */
    public $mediaIds;
    protected $_name = [
        'additionType' => 'AdditionType',
        'mediaIds'     => 'MediaIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionType) {
            $res['AdditionType'] = $this->additionType;
        }
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetMediaInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionType'])) {
            $model->additionType = $map['AdditionType'];
        }
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }

        return $model;
    }
}
