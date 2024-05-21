<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class metadataOptions extends Model
{
    /**
     * @description Indicates whether the access channel is enabled for instance metadata. Valid values:
     *
     *   enabled
     *   disabled
     *
     * @example enabled
     *
     * @var string
     */
    public $httpEndpoint;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example 0
     *
     * @var int
     */
    public $httpPutResponseHopLimit;

    /**
     * @description Indicates whether the security hardening mode (IMDSv2) is forcefully used to access instance metadata. Valid values:
     *
     *   optional: The security hardening mode (IMDSv2) is not forcefully used.
     *   required: The security hardening mode (IMDSv2) is forcefully used.
     *
     * @example optional
     *
     * @var string
     */
    public $httpTokens;
    protected $_name = [
        'httpEndpoint'            => 'HttpEndpoint',
        'httpPutResponseHopLimit' => 'HttpPutResponseHopLimit',
        'httpTokens'              => 'HttpTokens',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpEndpoint) {
            $res['HttpEndpoint'] = $this->httpEndpoint;
        }
        if (null !== $this->httpPutResponseHopLimit) {
            $res['HttpPutResponseHopLimit'] = $this->httpPutResponseHopLimit;
        }
        if (null !== $this->httpTokens) {
            $res['HttpTokens'] = $this->httpTokens;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metadataOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HttpEndpoint'])) {
            $model->httpEndpoint = $map['HttpEndpoint'];
        }
        if (isset($map['HttpPutResponseHopLimit'])) {
            $model->httpPutResponseHopLimit = $map['HttpPutResponseHopLimit'];
        }
        if (isset($map['HttpTokens'])) {
            $model->httpTokens = $map['HttpTokens'];
        }

        return $model;
    }
}
