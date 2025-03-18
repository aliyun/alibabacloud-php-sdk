<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListHostShareKeysResponseBody\hostShareKeys;
use AlibabaCloud\Tea\Model;

class ListHostShareKeysResponseBody extends Model
{
    /**
     * @description An array that consists of the shared keys.
     *
     * @var hostShareKeys[]
     */
    public $hostShareKeys;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example EC9BF0F4-8983-491A-BC8C-1B4DD94976DE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of the shared keys.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'hostShareKeys' => 'HostShareKeys',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostShareKeys) {
            $res['HostShareKeys'] = [];
            if (null !== $this->hostShareKeys && \is_array($this->hostShareKeys)) {
                $n = 0;
                foreach ($this->hostShareKeys as $item) {
                    $res['HostShareKeys'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListHostShareKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostShareKeys'])) {
            if (!empty($map['HostShareKeys'])) {
                $model->hostShareKeys = [];
                $n = 0;
                foreach ($map['HostShareKeys'] as $item) {
                    $model->hostShareKeys[$n++] = null !== $item ? hostShareKeys::fromMap($item) : $item;
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
