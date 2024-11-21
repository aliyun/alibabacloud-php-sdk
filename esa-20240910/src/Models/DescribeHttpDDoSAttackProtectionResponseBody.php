<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DescribeHttpDDoSAttackProtectionResponseBody extends Model
{
    /**
     * @description The level of HTTP DDoS attack protection. Valid values:
     *
     *   **very weak**: very loose.
     *   **weak**: loose.
     *   **default**: normal.
     *   **hard**: strict.
     *
     * @example default
     *
     * @var string
     */
    public $globalMode;

    /**
     * @description The request ID.
     *
     * @example 35C66C7B-671H-4297-9187-2C4477247A78
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The website ID.
     *
     * @example 123456****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'globalMode' => 'GlobalMode',
        'requestId'  => 'RequestId',
        'siteId'     => 'SiteId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->globalMode) {
            $res['GlobalMode'] = $this->globalMode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHttpDDoSAttackProtectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GlobalMode'])) {
            $model->globalMode = $map['GlobalMode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
