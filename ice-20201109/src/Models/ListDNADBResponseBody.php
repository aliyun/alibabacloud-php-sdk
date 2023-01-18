<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListDNADBResponseBody\DBList;
use AlibabaCloud\Tea\Model;

class ListDNADBResponseBody extends Model
{
    /**
     * @var DBList[]
     */
    public $DBList;

    /**
     * @example 25818875-5F78-4A13-BEF6-D7393642CA58
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBList'    => 'DBList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBList) {
            $res['DBList'] = [];
            if (null !== $this->DBList && \is_array($this->DBList)) {
                $n = 0;
                foreach ($this->DBList as $item) {
                    $res['DBList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDNADBResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBList'])) {
            if (!empty($map['DBList'])) {
                $model->DBList = [];
                $n             = 0;
                foreach ($map['DBList'] as $item) {
                    $model->DBList[$n++] = null !== $item ? DBList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
