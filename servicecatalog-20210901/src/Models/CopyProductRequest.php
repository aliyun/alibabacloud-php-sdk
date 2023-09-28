<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models;

use AlibabaCloud\Tea\Model;

class CopyProductRequest extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the source product.
     *
     * > The source product can belong to the current account or belong to a product portfolio that is shared by another account.
     * @example acs:servicecatalog:cn-hangzhou:146611588617****:product/prod-bp18r7q127****
     *
     * @var string
     */
    public $sourceProductArn;

    /**
     * @description The name of the destination product.
     *
     * @example DEMO-ECS
     *
     * @var string
     */
    public $targetProductName;
    protected $_name = [
        'sourceProductArn'  => 'SourceProductArn',
        'targetProductName' => 'TargetProductName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceProductArn) {
            $res['SourceProductArn'] = $this->sourceProductArn;
        }
        if (null !== $this->targetProductName) {
            $res['TargetProductName'] = $this->targetProductName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceProductArn'])) {
            $model->sourceProductArn = $map['SourceProductArn'];
        }
        if (isset($map['TargetProductName'])) {
            $model->targetProductName = $map['TargetProductName'];
        }

        return $model;
    }
}
