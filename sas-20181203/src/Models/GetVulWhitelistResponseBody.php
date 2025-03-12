<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetVulWhitelistResponseBody\vulWhitelist;
use AlibabaCloud\Tea\Model;

class GetVulWhitelistResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 09969D2C-4FAD-429E-BFBF-9A60DEF8BF6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the whitelist.
     *
     * @var vulWhitelist
     */
    public $vulWhitelist;
    protected $_name = [
        'requestId'    => 'RequestId',
        'vulWhitelist' => 'VulWhitelist',
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
        if (null !== $this->vulWhitelist) {
            $res['VulWhitelist'] = null !== $this->vulWhitelist ? $this->vulWhitelist->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetVulWhitelistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VulWhitelist'])) {
            $model->vulWhitelist = vulWhitelist::fromMap($map['VulWhitelist']);
        }

        return $model;
    }
}
