<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeServiceMirrorResponseBody extends Model
{
    /**
     * @description The percentage of traffic that you want to mirror. Valid values: 0 to 100.
     *
     * @example 50
     *
     * @var string
     */
    public $ratio;

    /**
     * @description The request ID.
     *
     * @example 40325405-579C-4D82****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The service name.
     *
     * @example foo
     *
     * @var string
     */
    public $serviceName;

    /**
     * @description The destination services to which you want to mirror traffic.
     *
     * @example foo2,foo3
     *
     * @var string
     */
    public $target;
    protected $_name = [
        'ratio'       => 'Ratio',
        'requestId'   => 'RequestId',
        'serviceName' => 'ServiceName',
        'target'      => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ratio) {
            $res['Ratio'] = $this->ratio;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeServiceMirrorResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ratio'])) {
            $model->ratio = $map['Ratio'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
