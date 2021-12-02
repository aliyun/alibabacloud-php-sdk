<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeNewProjectEipMonitorDataResponseBody\eipMonitorDatas;
use AlibabaCloud\Tea\Model;

class DescribeNewProjectEipMonitorDataResponseBody extends Model
{
    /**
     * @var eipMonitorDatas
     */
    public $eipMonitorDatas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'eipMonitorDatas' => 'EipMonitorDatas',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipMonitorDatas) {
            $res['EipMonitorDatas'] = null !== $this->eipMonitorDatas ? $this->eipMonitorDatas->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNewProjectEipMonitorDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipMonitorDatas'])) {
            $model->eipMonitorDatas = eipMonitorDatas::fromMap($map['EipMonitorDatas']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
