<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DistributeImageRequest extends Model
{
    /**
     * @var string[]
     */
    public $distributeRegionList;
    /**
     * @var string
     */
    public $imageId;
    protected $_name = [
        'distributeRegionList' => 'DistributeRegionList',
        'imageId'              => 'ImageId',
    ];

    public function validate()
    {
        if (\is_array($this->distributeRegionList)) {
            Model::validateArray($this->distributeRegionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distributeRegionList) {
            if (\is_array($this->distributeRegionList)) {
                $res['DistributeRegionList'] = [];
                $n1                          = 0;
                foreach ($this->distributeRegionList as $item1) {
                    $res['DistributeRegionList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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
        if (isset($map['DistributeRegionList'])) {
            if (!empty($map['DistributeRegionList'])) {
                $model->distributeRegionList = [];
                $n1                          = 0;
                foreach ($map['DistributeRegionList'] as $item1) {
                    $model->distributeRegionList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        return $model;
    }
}
