<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeIpAbroadCountryInfosResponseBody\abroadInfos;
use AlibabaCloud\Tea\Model;

class DescribeIpAbroadCountryInfosResponseBody extends Model
{
    /**
     * @var abroadInfos[]
     */
    public $abroadInfos;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example caeba0bbb2be03f84eb48b699f0*****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 66A98669-CC6E-4F3E-80A6-3014697B11AE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'abroadInfos' => 'AbroadInfos',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->abroadInfos) {
            $res['AbroadInfos'] = [];
            if (null !== $this->abroadInfos && \is_array($this->abroadInfos)) {
                $n = 0;
                foreach ($this->abroadInfos as $item) {
                    $res['AbroadInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
     * @return DescribeIpAbroadCountryInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbroadInfos'])) {
            if (!empty($map['AbroadInfos'])) {
                $model->abroadInfos = [];
                $n = 0;
                foreach ($map['AbroadInfos'] as $item) {
                    $model->abroadInfos[$n++] = null !== $item ? abroadInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
