<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506\Models\ImportProductsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $itemUniqueId;

    /**
     * @var string
     */
    public $platformItemId;
    protected $_name = [
        'itemUniqueId' => 'ItemUniqueId',
        'platformItemId' => 'PlatformItemId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemUniqueId) {
            $res['ItemUniqueId'] = $this->itemUniqueId;
        }

        if (null !== $this->platformItemId) {
            $res['PlatformItemId'] = $this->platformItemId;
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
        if (isset($map['ItemUniqueId'])) {
            $model->itemUniqueId = $map['ItemUniqueId'];
        }

        if (isset($map['PlatformItemId'])) {
            $model->platformItemId = $map['PlatformItemId'];
        }

        return $model;
    }
}
