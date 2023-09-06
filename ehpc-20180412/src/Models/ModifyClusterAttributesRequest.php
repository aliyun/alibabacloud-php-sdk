<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyClusterAttributesRequest\winAdPar;
use AlibabaCloud\Tea\Model;

class ModifyClusterAttributesRequest extends Model
{
    /**
     * @description The ID of the cluster that you want to modify.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The new cluster description.
     *
     * @example test-description
     *
     * @var string
     */
    public $description;

    /**
     * @description The IDs of the images.
     *
     * @example centos_7_06_64_20G_alibase_2019071****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The new image type of the cluster. Valid values:
     *
     *   system: public image
     *   self: custom image
     *   others: shared image
     *   marketplace: Alibaba Cloud Marketplace image
     *
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description The new cluster name.
     *
     * @example cluster1
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the node to which you want to bind the RAM role.
     *
     * @var string[]
     */
    public $ramNodeTypes;

    /**
     * @description The name of the instance RAM role.
     *
     * @example testRamRoleName
     *
     * @var string
     */
    public $ramRoleName;

    /**
     * @description The parameters that are used to connect to the Windows AD server.
     *
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
