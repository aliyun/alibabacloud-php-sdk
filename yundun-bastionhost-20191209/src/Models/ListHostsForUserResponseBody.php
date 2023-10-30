<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostsForUserResponseBody\hosts;
use AlibabaCloud\Tea\Model;

class ListHostsForUserResponseBody extends Model
{
    /**
     * @description The ID of the user.
     *
     * >  You can call the [ListUsers](~~204522~~) operation to query the ID of the user ID.
     * @var hosts[]
     */
    public $hosts;

    /**
     * @description The hosts returned.
     *
     * @example EC9BF0F4-8983-491A-BC8C-1B4DD94976DE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The public endpoint of the host. The value is a domain name or an IP address.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hosts'      => 'Hosts',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hosts) {
            $res['Hosts'] = [];
            if (null !== $this->hosts && \is_array($this->hosts)) {
                $n = 0;
                foreach ($this->hosts as $item) {
                    $res['Hosts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHostsForUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hosts'])) {
            if (!empty($map['Hosts'])) {
                $model->hosts = [];
                $n            = 0;
                foreach ($map['Hosts'] as $item) {
                    $model->hosts[$n++] = null !== $item ? hosts::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
