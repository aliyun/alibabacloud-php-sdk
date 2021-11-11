<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models\ListPwnedPasswordsResponseBody\pwnedPasswordInfos;
use AlibabaCloud\Tea\Model;

class ListPwnedPasswordsResponseBody extends Model
{
    /**
     * @var pwnedPasswordInfos[]
     */
    public $pwnedPasswordInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @description 返回列表长度
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pwnedPasswordInfos' => 'PwnedPasswordInfos',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pwnedPasswordInfos) {
            $res['PwnedPasswordInfos'] = [];
            if (null !== $this->pwnedPasswordInfos && \is_array($this->pwnedPasswordInfos)) {
                $n = 0;
                foreach ($this->pwnedPasswordInfos as $item) {
                    $res['PwnedPasswordInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPwnedPasswordsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PwnedPasswordInfos'])) {
            if (!empty($map['PwnedPasswordInfos'])) {
                $model->pwnedPasswordInfos = [];
                $n                         = 0;
                foreach ($map['PwnedPasswordInfos'] as $item) {
                    $model->pwnedPasswordInfos[$n++] = null !== $item ? pwnedPasswordInfos::fromMap($item) : $item;
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
