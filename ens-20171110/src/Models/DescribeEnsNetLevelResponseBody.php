<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetLevelResponseBody\ensNetLevels;
use AlibabaCloud\Tea\Model;

class DescribeEnsNetLevelResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var ensNetLevels
     */
    public $ensNetLevels;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'         => 'Code',
        'ensNetLevels' => 'EnsNetLevels',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->ensNetLevels) {
            $res['EnsNetLevels'] = null !== $this->ensNetLevels ? $this->ensNetLevels->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsNetLevelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EnsNetLevels'])) {
            $model->ensNetLevels = ensNetLevels::fromMap($map['EnsNetLevels']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
