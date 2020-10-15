<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetLevelResponse\ensNetLevels;
use AlibabaCloud\Tea\Model;

class DescribeEnsNetLevelResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var ensNetLevels
     */
    public $ensNetLevels;
    protected $_name = [
        'requestId'    => 'RequestId',
        'code'         => 'Code',
        'ensNetLevels' => 'EnsNetLevels',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('ensNetLevels', $this->ensNetLevels, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->ensNetLevels) {
            $res['EnsNetLevels'] = null !== $this->ensNetLevels ? $this->ensNetLevels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsNetLevelResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EnsNetLevels'])) {
            $model->ensNetLevels = ensNetLevels::fromMap($map['EnsNetLevels']);
        }

        return $model;
    }
}
