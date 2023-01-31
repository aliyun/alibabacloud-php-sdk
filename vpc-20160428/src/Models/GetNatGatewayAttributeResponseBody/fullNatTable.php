<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class fullNatTable extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $fullNatEntryCount;

    /**
     * @example fulltb-gw88z7hhlv43rmb26****
     *
     * @var string
     */
    public $fullNatTableId;
    protected $_name = [
        'fullNatEntryCount' => 'FullNatEntryCount',
        'fullNatTableId'    => 'FullNatTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return fullNatTable
     */
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
