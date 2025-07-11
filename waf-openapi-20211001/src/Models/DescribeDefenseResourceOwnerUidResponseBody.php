<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefenseResourceOwnerUidResponseBody\ownerInfos;
use AlibabaCloud\Tea\Model;

class DescribeDefenseResourceOwnerUidResponseBody extends Model
{
    /**
     * @var ownerInfos[]
     */
    public $ownerInfos;

    /**
     * @example 7326952B-B83B-5B7C-84FA-77F3E17310A2
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ownerInfos' => 'OwnerInfos',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerInfos) {
            $res['OwnerInfos'] = [];
            if (null !== $this->ownerInfos && \is_array($this->ownerInfos)) {
                $n = 0;
                foreach ($this->ownerInfos as $item) {
                    $res['OwnerInfos'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDefenseResourceOwnerUidResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerInfos'])) {
            if (!empty($map['OwnerInfos'])) {
                $model->ownerInfos = [];
                $n = 0;
                foreach ($map['OwnerInfos'] as $item) {
                    $model->ownerInfos[$n++] = null !== $item ? ownerInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
