<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\Tea\Model;

class DescribeDdosPeakFlowResponseBody extends Model
{
    /**
     * @var string
     */
    public $peakFlow;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'peakFlow'  => 'PeakFlow',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->peakFlow) {
            $res['PeakFlow'] = $this->peakFlow;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosPeakFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PeakFlow'])) {
            $model->peakFlow = $map['PeakFlow'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
