<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;

use AlibabaCloud\Dara\Model;

class storagePolicy extends Model
{
    /**
     * @var string[]
     */
    public $storageTypeList;
    protected $_name = [
        'storageTypeList' => 'StorageTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->storageTypeList)) {
            Model::validateArray($this->storageTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->storageTypeList) {
            if (\is_array($this->storageTypeList)) {
                $res['StorageTypeList'] = [];
                $n1                     = 0;
                foreach ($this->storageTypeList as $item1) {
                    $res['StorageTypeList'][$n1++] = $item1;
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
        if (isset($map['StorageTypeList'])) {
            if (!empty($map['StorageTypeList'])) {
                $model->storageTypeList = [];
                $n1                     = 0;
                foreach ($map['StorageTypeList'] as $item1) {
                    $model->storageTypeList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
