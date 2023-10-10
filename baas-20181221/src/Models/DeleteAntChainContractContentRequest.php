<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class DeleteAntChainContractContentRequest extends Model
{
    /**
     * @example GKX7KZX0
     *
     * @var string
     */
    public $contentId;
    protected $_name = [
        'contentId' => 'ContentId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentId) {
            $res['ContentId'] = $this->contentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAntChainContractContentRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentId'])) {
            $model->contentId = $map['ContentId'];
        }

        return $model;
    }
}
