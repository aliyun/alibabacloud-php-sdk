<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class snatTable extends Model
{
    /**
     * @var int
     */
    public $snatEntryCount;

    /**
     * @var string
     */
    public $snatTableId;
    protected $_name = [
        'snatEntryCount' => 'SnatEntryCount',
        'snatTableId' => 'SnatTableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snatEntryCount) {
            $res['SnatEntryCount'] = $this->snatEntryCount;
        }

        if (null !== $this->snatTableId) {
            $res['SnatTableId'] = $this->snatTableId;
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
        if (isset($map['SnatEntryCount'])) {
            $model->snatEntryCount = $map['SnatEntryCount'];
        }

        if (isset($map['SnatTableId'])) {
            $model->snatTableId = $map['SnatTableId'];
        }

        return $model;
    }
}
