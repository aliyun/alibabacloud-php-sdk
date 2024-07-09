<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeResolverAvailableZonesRequest extends Model
{
    /**
     * @description The zone ID.
     *
     * @example cn-zhangjiakou-a
     *
     * @var string
     */
    public $azId;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-zhangjiakou
     *
     * @var string
     */
    public $resolverRegionId;
    protected $_name = [
        'azId'             => 'AzId',
        'lang'             => 'Lang',
        'resolverRegionId' => 'ResolverRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->azId) {
            $res['AzId'] = $this->azId;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->resolverRegionId) {
            $res['ResolverRegionId'] = $this->resolverRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResolverAvailableZonesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AzId'])) {
            $model->azId = $map['AzId'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ResolverRegionId'])) {
            $model->resolverRegionId = $map['ResolverRegionId'];
        }

        return $model;
    }
}
