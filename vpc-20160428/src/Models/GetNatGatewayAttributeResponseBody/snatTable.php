<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class snatTable extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $snatEntryCount;

    /**
     * @example stb-SnatTableIds****
     *
     * @var string
     */
    public $snatTableId;
    protected $_name = [
        'snatEntryCount' => 'SnatEntryCount',
        'snatTableId'    => 'SnatTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return snatTable
     */
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
