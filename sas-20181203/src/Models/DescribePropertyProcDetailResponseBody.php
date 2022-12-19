<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyProcDetailResponseBody\pageInfo;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyProcDetailResponseBody\propertys;
use AlibabaCloud\Tea\Model;

class DescribePropertyProcDetailResponseBody extends Model
{
    /**
     * @description The pagination information.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description An array that consists of the fingerprints of the processes.
     *
     * @var propertys[]
     */
    public $propertys;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example AA47D46F-10DE-138C-BBB4-8A0003F75CD7
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
     * @return DescribePropertyProcDetailResponseBody
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
