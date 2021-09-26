<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeFlowNodeInstanceLauncherLogResponseBody\logEntrys;
use AlibabaCloud\Tea\Model;

class DescribeFlowNodeInstanceLauncherLogResponseBody extends Model
{
    /**
     * @var bool
     */
    public $logEnd;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var logEntrys
     */
    public $logEntrys;
    protected $_name = [
        'logEnd'    => 'LogEnd',
        'requestId' => 'RequestId',
        'logEntrys' => 'LogEntrys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logEnd) {
            $res['LogEnd'] = $this->logEnd;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->logEntrys) {
            $res['LogEntrys'] = null !== $this->logEntrys ? $this->logEntrys->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFlowNodeInstanceLauncherLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogEnd'])) {
            $model->logEnd = $map['LogEnd'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LogEntrys'])) {
            $model->logEntrys = logEntrys::fromMap($map['LogEntrys']);
        }

        return $model;
    }
}
