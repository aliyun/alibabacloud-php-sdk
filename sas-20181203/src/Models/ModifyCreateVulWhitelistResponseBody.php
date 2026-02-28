<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCreateVulWhitelistResponseBody\vulWhitelistList;

class ModifyCreateVulWhitelistResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var vulWhitelistList
     */
    public $vulWhitelistList;
    protected $_name = [
        'requestId' => 'RequestId',
        'vulWhitelistList' => 'VulWhitelistList',
    ];

    public function validate()
    {
        if (null !== $this->vulWhitelistList) {
            $this->vulWhitelistList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vulWhitelistList) {
            $res['VulWhitelistList'] = null !== $this->vulWhitelistList ? $this->vulWhitelistList->toArray($noStream) : $this->vulWhitelistList;
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

        if (isset($map['VulWhitelistList'])) {
            $model->vulWhitelistList = vulWhitelistList::fromMap($map['VulWhitelistList']);
        }

        return $model;
    }
}
