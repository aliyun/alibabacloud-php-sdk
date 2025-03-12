<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertySoftwareDetailResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertySoftwareDetailResponseBody\propertys;
use AlibabaCloud\Tea\Model;

class DescribePropertySoftwareDetailResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The details of the software asset.
     *
     * @var propertys[]
     */
    public $propertys;

    /**
     * @description The request ID.
     *
     * @example 6AEE7412-0065-1135-B790-AE2C38BA68FB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'pageInfo'  => 'PageInfo',
        'propertys' => 'Propertys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->propertys) {
            $res['Propertys'] = [];
            if (null !== $this->propertys && \is_array($this->propertys)) {
                $n = 0;
                foreach ($this->propertys as $item) {
                    $res['Propertys'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribePropertySoftwareDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['Propertys'])) {
            if (!empty($map['Propertys'])) {
                $model->propertys = [];
                $n                = 0;
                foreach ($map['Propertys'] as $item) {
                    $model->propertys[$n++] = null !== $item ? propertys::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
