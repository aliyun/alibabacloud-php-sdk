<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class UpdateImageInfosRequest extends Model
{
    /**
     * @var int
     */
    public $resourceRealOwnerId;

    /**
     * @var string
     */
    public $updateContent;
    protected $_name = [
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'updateContent'       => 'UpdateContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceRealOwnerId) {
            $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        }
        if (null !== $this->updateContent) {
            $res['UpdateContent'] = $this->updateContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateImageInfosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceRealOwnerId'])) {
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }
        if (isset($map['UpdateContent'])) {
            $model->updateContent = $map['UpdateContent'];
        }

        return $model;
    }
}
