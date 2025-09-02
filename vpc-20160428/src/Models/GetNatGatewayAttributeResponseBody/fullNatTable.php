<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class fullNatTable extends Model
{
    /**
     * @var int
     */
    public $fullNatEntryCount;

    /**
     * @var string
     */
    public $fullNatTableId;
    protected $_name = [
        'fullNatEntryCount' => 'FullNatEntryCount',
        'fullNatTableId' => 'FullNatTableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fullNatEntryCount) {
            $res['FullNatEntryCount'] = $this->fullNatEntryCount;
        }

        if (null !== $this->fullNatTableId) {
            $res['FullNatTableId'] = $this->fullNatTableId;
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
        if (isset($map['FullNatEntryCount'])) {
            $model->fullNatEntryCount = $map['FullNatEntryCount'];
        }

        if (isset($map['FullNatTableId'])) {
            $model->fullNatTableId = $map['FullNatTableId'];
        }

        return $model;
    }
}
