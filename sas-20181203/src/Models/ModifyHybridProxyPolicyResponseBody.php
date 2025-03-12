<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyHybridProxyPolicyResponseBody extends Model
{
    /**
     * @description The message of the request.
     *
     * @example clusterName data not exist
     *
     * @var string
     */
    public $messgae;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example A4EB8B1C-1DEC-5E18-BCD0-D1BBB3936FA7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'messgae'   => 'Messgae',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messgae) {
            $res['Messgae'] = $this->messgae;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHybridProxyPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Messgae'])) {
            $model->messgae = $map['Messgae'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
