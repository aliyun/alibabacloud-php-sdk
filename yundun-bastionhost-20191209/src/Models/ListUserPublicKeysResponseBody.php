<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListUserPublicKeysResponseBody\publicKeys;
use AlibabaCloud\Tea\Model;

class ListUserPublicKeysResponseBody extends Model
{
    /**
     * @description An array that consists of the public keys of the user.
     *
     * @var publicKeys[]
     */
    public $publicKeys;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example EC9BF0F4-8983-491A-BC8C-1B4DD94976DE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of public keys.
     *
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'publicKeys' => 'PublicKeys',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publicKeys) {
            $res['PublicKeys'] = [];
            if (null !== $this->publicKeys && \is_array($this->publicKeys)) {
                $n = 0;
                foreach ($this->publicKeys as $item) {
                    $res['PublicKeys'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListUserPublicKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublicKeys'])) {
            if (!empty($map['PublicKeys'])) {
                $model->publicKeys = [];
                $n                 = 0;
                foreach ($map['PublicKeys'] as $item) {
                    $model->publicKeys[$n++] = null !== $item ? publicKeys::fromMap($item) : $item;
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
