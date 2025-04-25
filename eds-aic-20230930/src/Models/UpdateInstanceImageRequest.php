<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceImageRequest extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string[]
     */
    public $instanceIdList;
    protected $_name = [
        'imageId' => 'ImageId',
        'instanceIdList' => 'InstanceIdList',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIdList)) {
            Model::validateArray($this->instanceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceIdList) {
            if (\is_array($this->instanceIdList)) {
                $res['InstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->instanceIdList as $item1) {
                    $res['InstanceIdList'][$n1++] = $item1;
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
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceIdList'])) {
            if (!empty($map['InstanceIdList'])) {
                $model->instanceIdList = [];
                $n1 = 0;
                foreach ($map['InstanceIdList'] as $item1) {
                    $model->instanceIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
