<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipMonitorDataResponseBody\eipMonitorDatas;
use AlibabaCloud\Tea\Model;

class DescribeEipMonitorDataResponseBody extends Model
{
    /**
     * @var eipMonitorDatas
     */
    public $eipMonitorDatas;

    /**
     * @example C8B26B44-0189-443E-9816-D951F59623A9
     *
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
     * @return DescribeEipMonitorDataResponseBody
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
