<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Afs\V20180112\Models;

use AlibabaCloud\SDK\Afs\V20180112\Models\DescribeEarlyWarningResponseBody\earlyWarnings;
use AlibabaCloud\Tea\Model;

class DescribeEarlyWarningResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $hasWarning;

    /**
     * @var earlyWarnings[]
     */
    public $earlyWarnings;

    /**
     * @var string
     */
    public $bizCode;
    protected $_name = [
        'requestId'     => 'RequestId',
        'hasWarning'    => 'HasWarning',
        'earlyWarnings' => 'EarlyWarnings',
        'bizCode'       => 'BizCode',
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
        if (null !== $this->hasWarning) {
            $res['HasWarning'] = $this->hasWarning;
        }
        if (null !== $this->earlyWarnings) {
            $res['EarlyWarnings'] = [];
            if (null !== $this->earlyWarnings && \is_array($this->earlyWarnings)) {
                $n = 0;
                foreach ($this->earlyWarnings as $item) {
                    $res['EarlyWarnings'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->bizCode) {
            $res['BizCode'] = $this->bizCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEarlyWarningResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['HasWarning'])) {
            $model->hasWarning = $map['HasWarning'];
        }
        if (isset($map['EarlyWarnings'])) {
            if (!empty($map['EarlyWarnings'])) {
                $model->earlyWarnings = [];
                $n                    = 0;
                foreach ($map['EarlyWarnings'] as $item) {
                    $model->earlyWarnings[$n++] = null !== $item ? earlyWarnings::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['BizCode'])) {
            $model->bizCode = $map['BizCode'];
        }

        return $model;
    }
}
