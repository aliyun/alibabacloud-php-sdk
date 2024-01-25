<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\AddEnvironmentProductVersionsRequest;

use AlibabaCloud\Tea\Model;

class productVersionInfoList extends Model
{
    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $productVersionUID;

    /**
     * @var string
     */
    public $specUID;
    protected $_name = [
        'namespace'         => 'namespace',
        'productVersionUID' => 'productVersionUID',
        'specUID'           => 'specUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }
        if (null !== $this->specUID) {
            $res['specUID'] = $this->specUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return productVersionInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }
        if (isset($map['specUID'])) {
            $model->specUID = $map['specUID'];
        }

        return $model;
    }
}
