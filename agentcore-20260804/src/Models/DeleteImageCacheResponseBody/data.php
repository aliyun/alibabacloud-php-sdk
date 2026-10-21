<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\DeleteImageCacheResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $deletionPending;

    /**
     * @var string
     */
    public $imageId;
    protected $_name = [
        'deletionPending' => 'deletionPending',
        'imageId' => 'imageId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deletionPending) {
            $res['deletionPending'] = $this->deletionPending;
        }

        if (null !== $this->imageId) {
            $res['imageId'] = $this->imageId;
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
        if (isset($map['deletionPending'])) {
            $model->deletionPending = $map['deletionPending'];
        }

        if (isset($map['imageId'])) {
            $model->imageId = $map['imageId'];
        }

        return $model;
    }
}
