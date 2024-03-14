<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePrefixListsResponseBody\prefixList;
use AlibabaCloud\Tea\Model;

class DescribePrefixListsResponseBody extends Model
{
    /**
     * @description Details about the prefix lists.
     *
     * @var prefixList[]
     */
    public $prefixList;

    /**
     * @description The ID of the request.
     *
     * @example 67FD76C2-C493-5815-8107-643FD7AB77C7
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'prefixList' => 'PrefixList',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prefixList) {
            $res['PrefixList'] = [];
            if (null !== $this->prefixList && \is_array($this->prefixList)) {
                $n = 0;
                foreach ($this->prefixList as $item) {
                    $res['PrefixList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribePrefixListsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrefixList'])) {
            if (!empty($map['PrefixList'])) {
                $model->prefixList = [];
                $n                 = 0;
                foreach ($map['PrefixList'] as $item) {
                    $model->prefixList[$n++] = null !== $item ? prefixList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
