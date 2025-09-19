<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetVulWhitelistResponseBody\vulWhitelist;

class GetVulWhitelistResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vulWhitelist
     */
    public $vulWhitelist;
    protected $_name = [
        'requestId' => 'RequestId',
        'vulWhitelist' => 'VulWhitelist',
    ];

    public function validate()
    {
        if (null !== $this->vulWhitelist) {
            $this->vulWhitelist->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vulWhitelist) {
            $res['VulWhitelist'] = null !== $this->vulWhitelist ? $this->vulWhitelist->toArray($noStream) : $this->vulWhitelist;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
