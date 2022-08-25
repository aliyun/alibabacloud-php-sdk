<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceMeshServiceLabelResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ServiceLabelsValue[]
     */
    public $serviceLabels;
    protected $_name = [
        'requestId'     => 'RequestId',
        'serviceLabels' => 'ServiceLabels',
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
        if (null !== $this->serviceLabels) {
            $res['ServiceLabels'] = [];
            if (null !== $this->serviceLabels && \is_array($this->serviceLabels)) {
                foreach ($this->serviceLabels as $key => $val) {
                    $res['ServiceLabels'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMeshServiceLabelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceLabels'])) {
            $model->serviceLabels = $map['ServiceLabels'];
        }

        return $model;
    }
}
