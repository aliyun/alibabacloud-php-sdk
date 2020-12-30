<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetNatGatewayAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class forwardTable extends Model
{
    /**
     * @var int
     */
    public $forwardEntryCount;

    /**
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
