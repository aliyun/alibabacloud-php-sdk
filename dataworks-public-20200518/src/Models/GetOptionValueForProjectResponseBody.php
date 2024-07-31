<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetOptionValueForProjectResponseBody extends Model
{
    /**
     * @description The data returned In the example, cuNumber is a custom key.
     *
     * @example {"cuNumber":"0"}
     *
     * @var string
     */
    public $optionValue;

    /**
     * @description The request ID.
     *
     * @example E6F0DBDD-5AD****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'optionValue' => 'OptionValue',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->optionValue) {
            $res['OptionValue'] = $this->optionValue;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOptionValueForProjectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OptionValue'])) {
            $model->optionValue = $map['OptionValue'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
