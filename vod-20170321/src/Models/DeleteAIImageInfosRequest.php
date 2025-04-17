<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteAIImageInfosRequest extends Model
{
    /**
     * @var string
     */
    public $AIImageInfoIds;
    protected $_name = [
        'AIImageInfoIds' => 'AIImageInfoIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIImageInfoIds) {
            $res['AIImageInfoIds'] = $this->AIImageInfoIds;
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
        if (isset($map['AIImageInfoIds'])) {
            $model->AIImageInfoIds = $map['AIImageInfoIds'];
        }

        return $model;
    }
}
