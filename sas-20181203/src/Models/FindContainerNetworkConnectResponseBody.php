<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectResponseBody\connects;
use AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class FindContainerNetworkConnectResponseBody extends Model
{
    /**
     * @description The information about the network connections.
     *
     * @var connects[]
     */
    public $connects;

    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 8686CE6E-9BFA-5436-A9D9-77B984AEE7F8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'connects'  => 'Connects',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connects) {
            $res['Connects'] = [];
            if (null !== $this->connects && \is_array($this->connects)) {
                $n = 0;
                foreach ($this->connects as $item) {
                    $res['Connects'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindContainerNetworkConnectResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Connects'])) {
            if (!empty($map['Connects'])) {
                $model->connects = [];
                $n               = 0;
                foreach ($map['Connects'] as $item) {
                    $model->connects[$n++] = null !== $item ? connects::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
