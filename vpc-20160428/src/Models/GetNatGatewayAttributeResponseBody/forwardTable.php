<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class forwardTable extends Model
{
    /**
     * @description The number of DNAT entries.
     *
     * @example 1
     *
     * @var int
     */
    public $forwardEntryCount;

    /**
     * @description The ID of the DNAT table.
     *
     * @example ftb-uf6gj3mhsg94qsqst****
     *
     * @var string
     */
    public $forwardTableId;
    protected $_name = [
        'forwardEntryCount' => 'ForwardEntryCount',
        'forwardTableId'    => 'ForwardTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardEntryCount) {
            $res['ForwardEntryCount'] = $this->forwardEntryCount;
        }
        if (null !== $this->forwardTableId) {
            $res['ForwardTableId'] = $this->forwardTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forwardTable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardEntryCount'])) {
            $model->forwardEntryCount = $map['ForwardEntryCount'];
        }
        if (isset($map['ForwardTableId'])) {
            $model->forwardTableId = $map['ForwardTableId'];
        }

        return $model;
    }
}
