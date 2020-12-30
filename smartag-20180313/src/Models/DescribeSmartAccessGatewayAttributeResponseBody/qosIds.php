<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSmartAccessGatewayAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class qosIds extends Model
{
    /**
     * @var string[]
     */
    public $qosId;
    protected $_name = [
        'qosId' => 'QosId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qosIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QosId'])) {
            if (!empty($map['QosId'])) {
                $model->qosId = $map['QosId'];
            }
        }

        return $model;
    }
}
