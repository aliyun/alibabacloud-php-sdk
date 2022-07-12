<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ModifyImagePermissionRequest extends Model
{
    /**
     * @var int[]
     */
    public $addAccount;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int[]
     */
    public $removeAccount;
    protected $_name = [
        'addAccount'    => 'AddAccount',
        'imageId'       => 'ImageId',
        'regionId'      => 'RegionId',
        'removeAccount' => 'RemoveAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addAccount) {
            $res['AddAccount'] = $this->addAccount;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->removeAccount) {
            $res['RemoveAccount'] = $this->removeAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyImagePermissionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddAccount'])) {
            if (!empty($map['AddAccount'])) {
                $model->addAccount = $map['AddAccount'];
            }
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RemoveAccount'])) {
            if (!empty($map['RemoveAccount'])) {
                $model->removeAccount = $map['RemoveAccount'];
            }
        }

        return $model;
    }
}
