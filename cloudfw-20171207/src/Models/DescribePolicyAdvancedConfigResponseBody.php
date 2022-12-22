<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribePolicyAdvancedConfigResponseBody extends Model
{
    /**
     * @description Indicates whether the strict mode is enabled for the access control policy. Valid values:
     *
     *   **on**: The strict mode is enabled.
     *   **off**: The strict mode is disabled.
     *
     * @example off
     *
     * @var string
     */
    public $internetSwitch;

    /**
     * @description The ID of the request.
     *
     * @example 850A84D6-0DE4-4797-A1E8-00090125EEB1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'internetSwitch' => 'InternetSwitch',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->internetSwitch) {
            $res['InternetSwitch'] = $this->internetSwitch;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePolicyAdvancedConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InternetSwitch'])) {
            $model->internetSwitch = $map['InternetSwitch'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
