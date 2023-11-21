<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateBgpGroupResponseBody extends Model
{
    /**
     * @description The ID of the BGP group.
     *
     * @example bgpg-bp1k25cyp26cllath****
     *
     * @var string
     */
    public $bgpGroupId;

    /**
     * @description The request ID.
     *
     * @example C1221A1F-2ACD-4592-8F27-474E02883159
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bgpGroupId' => 'BgpGroupId',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgpGroupId) {
            $res['BgpGroupId'] = $this->bgpGroupId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBgpGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgpGroupId'])) {
            $model->bgpGroupId = $map['BgpGroupId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
