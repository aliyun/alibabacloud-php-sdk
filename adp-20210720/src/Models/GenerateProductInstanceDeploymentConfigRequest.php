<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class GenerateProductInstanceDeploymentConfigRequest extends Model
{
    /**
     * @example eda83f48-8c50-4e74-a307-xxx
     *
     * @var string
     */
    public $environmentUID;

    /**
     * @var string
     */
    public $packageContentType;

    /**
     * @example 94f632a9-1990-4c9b-8fd8-xxx
     *
     * @var string
     */
    public $packageUID;

    /**
     * @example 125c24a0-1b5c-42bd-b043-xxx
     *
     * @var string
     */
    public $productVersionUID;

    /**
     * @var string[]
     */
    public $productVersionUIDList;
    protected $_name = [
        'environmentUID'        => 'environmentUID',
        'packageContentType'    => 'packageContentType',
        'packageUID'            => 'packageUID',
        'productVersionUID'     => 'productVersionUID',
        'productVersionUIDList' => 'productVersionUIDList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environmentUID) {
            $res['environmentUID'] = $this->environmentUID;
        }
        if (null !== $this->packageContentType) {
            $res['packageContentType'] = $this->packageContentType;
        }
        if (null !== $this->packageUID) {
            $res['packageUID'] = $this->packageUID;
        }
        if (null !== $this->productVersionUID) {
            $res['productVersionUID'] = $this->productVersionUID;
        }
        if (null !== $this->productVersionUIDList) {
            $res['productVersionUIDList'] = $this->productVersionUIDList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateProductInstanceDeploymentConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['environmentUID'])) {
            $model->environmentUID = $map['environmentUID'];
        }
        if (isset($map['packageContentType'])) {
            $model->packageContentType = $map['packageContentType'];
        }
        if (isset($map['packageUID'])) {
            $model->packageUID = $map['packageUID'];
        }
        if (isset($map['productVersionUID'])) {
            $model->productVersionUID = $map['productVersionUID'];
        }
        if (isset($map['productVersionUIDList'])) {
            if (!empty($map['productVersionUIDList'])) {
                $model->productVersionUIDList = $map['productVersionUIDList'];
            }
        }

        return $model;
    }
}
