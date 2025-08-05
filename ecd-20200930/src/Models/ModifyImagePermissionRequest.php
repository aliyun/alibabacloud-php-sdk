<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

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
        'addAccount' => 'AddAccount',
        'imageId' => 'ImageId',
        'regionId' => 'RegionId',
        'removeAccount' => 'RemoveAccount',
    ];

    public function validate()
    {
        if (\is_array($this->addAccount)) {
            Model::validateArray($this->addAccount);
        }
        if (\is_array($this->removeAccount)) {
            Model::validateArray($this->removeAccount);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addAccount) {
            if (\is_array($this->addAccount)) {
                $res['AddAccount'] = [];
                $n1 = 0;
                foreach ($this->addAccount as $item1) {
                    $res['AddAccount'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->removeAccount) {
            if (\is_array($this->removeAccount)) {
                $res['RemoveAccount'] = [];
                $n1 = 0;
                foreach ($this->removeAccount as $item1) {
                    $res['RemoveAccount'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AddAccount'])) {
            if (!empty($map['AddAccount'])) {
                $model->addAccount = [];
                $n1 = 0;
                foreach ($map['AddAccount'] as $item1) {
                    $model->addAccount[$n1] = $item1;
                    ++$n1;
                }
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
                $model->removeAccount = [];
                $n1 = 0;
                foreach ($map['RemoveAccount'] as $item1) {
                    $model->removeAccount[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
