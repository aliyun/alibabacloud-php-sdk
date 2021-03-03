<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class DescribeProtectionModuleCodeConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $codeConfigs;
    protected $_name = [
        'requestId'   => 'RequestId',
        'codeConfigs' => 'CodeConfigs',
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
        if (null !== $this->codeConfigs) {
            $res['CodeConfigs'] = $this->codeConfigs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProtectionModuleCodeConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CodeConfigs'])) {
            $model->codeConfigs = $map['CodeConfigs'];
        }

        return $model;
    }
}
