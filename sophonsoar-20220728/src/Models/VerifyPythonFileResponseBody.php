<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\VerifyPythonFileResponseBody\syntax;
use AlibabaCloud\Tea\Model;

class VerifyPythonFileResponseBody extends Model
{
    /**
     * @example F72685FB-A6E6-5A9A-97F7-6DC1056E63CE
     *
     * @var string
     */
    public $requestId;

    /**
     * @var syntax[]
     */
    public $syntax;
    protected $_name = [
        'requestId' => 'RequestId',
        'syntax'    => 'Syntax',
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
        if (null !== $this->syntax) {
            $res['Syntax'] = [];
            if (null !== $this->syntax && \is_array($this->syntax)) {
                $n = 0;
                foreach ($this->syntax as $item) {
                    $res['Syntax'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyPythonFileResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Syntax'])) {
            if (!empty($map['Syntax'])) {
                $model->syntax = [];
                $n             = 0;
                foreach ($map['Syntax'] as $item) {
                    $model->syntax[$n++] = null !== $item ? syntax::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
