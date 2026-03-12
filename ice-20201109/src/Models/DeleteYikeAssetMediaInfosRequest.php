<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class DeleteYikeAssetMediaInfosRequest extends Model
{
    /**
     * @var bool
     */
    public $logicDelete;

    /**
     * @var string
     */
    public $mediaIds;
    protected $_name = [
        'logicDelete' => 'LogicDelete',
        'mediaIds' => 'MediaIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logicDelete) {
            $res['LogicDelete'] = $this->logicDelete;
        }

        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
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
        if (isset($map['LogicDelete'])) {
            $model->logicDelete = $map['LogicDelete'];
        }

        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }

        return $model;
    }
}
