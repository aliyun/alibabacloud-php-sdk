<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class MerchandisePlacementDetectionRequest extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $ragId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'apiId' => 'ApiId',
        'imageUrl' => 'ImageUrl',
        'ragId' => 'RagId',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->ragId) {
            $res['RagId'] = $this->ragId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['RagId'])) {
            $model->ragId = $map['RagId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
