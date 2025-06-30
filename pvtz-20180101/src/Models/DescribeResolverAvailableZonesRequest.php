<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;

class DescribeResolverAvailableZonesRequest extends Model
{
    /**
     * @var string
     */
    public $azId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $resolverRegionId;
    protected $_name = [
        'azId' => 'AzId',
        'lang' => 'Lang',
        'resolverRegionId' => 'ResolverRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
