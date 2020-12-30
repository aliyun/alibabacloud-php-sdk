<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class flowLogIds extends Model
{
    /**
     * @var string[]
     */
    public $flowLogId;
    protected $_name = [
        'flowLogId' => 'FlowLogId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowLogId) {
            $res['FlowLogId'] = $this->flowLogId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowLogIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowLogId'])) {
            if (!empty($map['FlowLogId'])) {
                $model->flowLogId = $map['FlowLogId'];
            }
        }

        return $model;
    }
}
