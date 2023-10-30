<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostAccountsForUserResponseBody\hostAccounts;
use AlibabaCloud\Tea\Model;

class ListHostAccountsForUserResponseBody extends Model
{
    /**
     * @description The host accounts returned.
     *
     * @var hostAccounts[]
     */
    public $hostAccounts;

    /**
     * @description The ID of the Bastionhost instance where you want to query the host accounts that the user is authorized to manage on the host.
     *
     * >  You can call the [DescribeInstances](~~153281~~) operation to query the ID of the Bastionhost instance.
     * @example EC9BF0F4-8983-491A-BC8C-1B4DD94976DE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries to return on each page.
     *
     * >  We recommend that you do not leave the PageSize parameter empty.
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hostAccounts' => 'HostAccounts',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAccounts) {
            $res['HostAccounts'] = [];
            if (null !== $this->hostAccounts && \is_array($this->hostAccounts)) {
                $n = 0;
                foreach ($this->hostAccounts as $item) {
                    $res['HostAccounts'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListHostAccountsForUserResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostAccounts'])) {
            if (!empty($map['HostAccounts'])) {
                $model->hostAccounts = [];
                $n                   = 0;
                foreach ($map['HostAccounts'] as $item) {
                    $model->hostAccounts[$n++] = null !== $item ? hostAccounts::fromMap($item) : $item;
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
