<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipMonitorDataResponseBody\eipMonitorDatas;
use AlibabaCloud\Tea\Model;

class DescribeEipMonitorDataResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var eipMonitorDatas
     */
    public $eipMonitorDatas;
    protected $_name = [
        'requestId'       => 'RequestId',
        'eipMonitorDatas' => 'EipMonitorDatas',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->eipMonitorDatas) {
            $res['EipMonitorDatas'] = null !== $this->eipMonitorDatas ? $this->eipMonitorDatas->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEipMonitorDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['EipMonitorDatas'])) {
            $model->eipMonitorDatas = eipMonitorDatas::fromMap($map['EipMonitorDatas']);
        }

        return $model;
    }
}
