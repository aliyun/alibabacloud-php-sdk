<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class EnableCustomBlockRecordRequest extends Model
{
    /**
     * @var string
     */
    public $blockIp;
    /**
     * @var string
     */
    public $bound;
    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'blockIp'         => 'BlockIp',
        'bound'           => 'Bound',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockIp) {
            $res['BlockIp'] = $this->blockIp;
        }

        if (null !== $this->bound) {
            $res['Bound'] = $this->bound;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['BlockIp'])) {
            $model->blockIp = $map['BlockIp'];
        }

        if (isset($map['Bound'])) {
            $model->bound = $map['Bound'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
