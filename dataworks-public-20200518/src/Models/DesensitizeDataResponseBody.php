<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DesensitizeDataResponseBody extends Model
{
    /**
     * @example {     "desensData": "**198807120510**"   }
     *
     * @var string
     */
    public $desensitizeData;

    /**
     * @example BCA321BA-46C5-40E9-8A08-6******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'desensitizeData' => 'DesensitizeData',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desensitizeData) {
            $res['DesensitizeData'] = $this->desensitizeData;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DesensitizeDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesensitizeData'])) {
            $model->desensitizeData = $map['DesensitizeData'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
