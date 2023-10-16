<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryIntentionOwnerResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var float
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerName;
    protected $_name = [
        'ownerId'   => 'OwnerId',
        'ownerName' => 'OwnerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }

        return $model;
    }
}
