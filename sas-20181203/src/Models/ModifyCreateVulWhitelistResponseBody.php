<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ModifyCreateVulWhitelistResponseBody\vulWhitelistList;
use AlibabaCloud\Tea\Model;

class ModifyCreateVulWhitelistResponseBody extends Model
{
    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 6B23A612-D997-5176-8C3B-D640DFD65772
     *
     * @var string
     */
    public $requestId;

    /**
     * @description An array that consists of the information about the whitelist.
     *
     * @var vulWhitelistList[]
     */
    public $vulWhitelistList;
    protected $_name = [
        'requestId'        => 'RequestId',
        'vulWhitelistList' => 'VulWhitelistList',
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
        if (null !== $this->vulWhitelistList) {
            $res['VulWhitelistList'] = [];
            if (null !== $this->vulWhitelistList && \is_array($this->vulWhitelistList)) {
                $n = 0;
                foreach ($this->vulWhitelistList as $item) {
                    $res['VulWhitelistList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCreateVulWhitelistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VulWhitelistList'])) {
            if (!empty($map['VulWhitelistList'])) {
                $model->vulWhitelistList = [];
                $n                       = 0;
                foreach ($map['VulWhitelistList'] as $item) {
                    $model->vulWhitelistList[$n++] = null !== $item ? vulWhitelistList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
