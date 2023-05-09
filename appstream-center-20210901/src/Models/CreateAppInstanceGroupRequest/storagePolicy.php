<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateAppInstanceGroupRequest;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageTypeList) {
            $res['StorageTypeList'] = $this->storageTypeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storagePolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageTypeList'])) {
            if (!empty($map['StorageTypeList'])) {
                $model->storageTypeList = $map['StorageTypeList'];
            }
        }

        return $model;
    }
}
