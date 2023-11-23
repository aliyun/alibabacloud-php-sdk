<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class CheckTransitRouterServiceResponseBody extends Model
{
    /**
     * @description Indicates whether the transit router feature is activated.
     *
     *   **true**: activated
     *   If this value is not returned, the system prompts that the current account does not have the transit router feature activated.
     *
     * @example true
     *
     * @var string
     */
    public $enabled;

    /**
     * @description The ID of the request.
     *
     * @example 5D93C8B9-C354-5C3E-BEFB-BA8A2C314D68
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'enabled'   => 'Enabled',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckTransitRouterServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
