<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyClusterAttributesRequest\winAdPar;
use AlibabaCloud\Tea\Model;

class ModifyClusterAttributesRequest extends Model
{
    /**
     * @description The ID of the image.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example test-description
     *
     * @var string
     */
    public $description;

    /**
     * @example centos_7_06_64_20G_alibase_2019071****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The ID of the request.
     *
     * @example cluster1
     *
     * @var string
     */
    public $name;

    /**
     * @description 授权实例配置时，要绑定RAM角色的节点类型。
     *
     * @var string[]
     */
    public $ramNodeTypes;

    /**
     * @description 授权实例配置时，实例RAM角色的名称。
     *
     * @example testRamRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @var winAdPar
     */
    public $winAdPar;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'description'     => 'Description',
        'imageId'         => 'ImageId',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'name'            => 'Name',
        'ramNodeTypes'    => 'RamNodeTypes',
        'ramRoleName'     => 'RamRoleName',
        'winAdPar'        => 'WinAdPar',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ramNodeTypes) {
            $res['RamNodeTypes'] = $this->ramNodeTypes;
        }
        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }
        if (null !== $this->winAdPar) {
            $res['WinAdPar'] = null !== $this->winAdPar ? $this->winAdPar->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterAttributesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RamNodeTypes'])) {
            if (!empty($map['RamNodeTypes'])) {
                $model->ramNodeTypes = $map['RamNodeTypes'];
            }
        }
        if (isset($map['RamRoleName'])) {
            $model->ramRoleName = $map['RamRoleName'];
        }
        if (isset($map['WinAdPar'])) {
            $model->winAdPar = winAdPar::fromMap($map['WinAdPar']);
        }

        return $model;
    }
}
