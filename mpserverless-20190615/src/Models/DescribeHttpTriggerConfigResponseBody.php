<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class DescribeHttpTriggerConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $defaultEndpoint;

    /**
     * @var bool
     */
    public $enableService;
    protected $_name = [
        'requestId'       => 'RequestId',
        'defaultEndpoint' => 'DefaultEndpoint',
        'enableService'   => 'EnableService',
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
        if (null !== $this->defaultEndpoint) {
            $res['DefaultEndpoint'] = $this->defaultEndpoint;
        }
        if (null !== $this->enableService) {
            $res['EnableService'] = $this->enableService;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHttpTriggerConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DefaultEndpoint'])) {
            $model->defaultEndpoint = $map['DefaultEndpoint'];
        }
        if (isset($map['EnableService'])) {
            $model->enableService = $map['EnableService'];
        }

        return $model;
    }
}
