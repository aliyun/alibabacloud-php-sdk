<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ModifyClusterAttributesRequest\winAdPar;

class ModifyClusterAttributesRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $ramNodeTypes;

    /**
     * @var string
     */
    public $ramRoleName;

    /**
     * @var winAdPar
     */
    public $winAdPar;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'description' => 'Description',
        'imageId' => 'ImageId',
        'imageOwnerAlias' => 'ImageOwnerAlias',
        'name' => 'Name',
        'ramNodeTypes' => 'RamNodeTypes',
        'ramRoleName' => 'RamRoleName',
        'winAdPar' => 'WinAdPar',
    ];

    public function validate()
    {
        if (\is_array($this->ramNodeTypes)) {
            Model::validateArray($this->ramNodeTypes);
        }
        if (null !== $this->winAdPar) {
            $this->winAdPar->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ramNodeTypes)) {
                $res['RamNodeTypes'] = [];
                $n1 = 0;
                foreach ($this->ramNodeTypes as $item1) {
                    $res['RamNodeTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ramRoleName) {
            $res['RamRoleName'] = $this->ramRoleName;
        }

        if (null !== $this->winAdPar) {
            $res['WinAdPar'] = null !== $this->winAdPar ? $this->winAdPar->toArray($noStream) : $this->winAdPar;
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
                $model->ramNodeTypes = [];
                $n1 = 0;
                foreach ($map['RamNodeTypes'] as $item1) {
                    $model->ramNodeTypes[$n1++] = $item1;
                }
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
