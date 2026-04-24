<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\AddPolarFsPathMappingRequest\customBucketPathList;

class AddPolarFsPathMappingRequest extends Model
{
    /**
     * @var customBucketPathList[]
     */
    public $customBucketPathList;

    /**
     * @var string
     */
    public $DBClusterId;

    /**
     * @var string
     */
    public $polarFsInstanceId;
    protected $_name = [
        'customBucketPathList' => 'CustomBucketPathList',
        'DBClusterId' => 'DBClusterId',
        'polarFsInstanceId' => 'PolarFsInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->customBucketPathList)) {
            Model::validateArray($this->customBucketPathList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customBucketPathList) {
            if (\is_array($this->customBucketPathList)) {
                $res['CustomBucketPathList'] = [];
                $n1 = 0;
                foreach ($this->customBucketPathList as $item1) {
                    $res['CustomBucketPathList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->polarFsInstanceId) {
            $res['PolarFsInstanceId'] = $this->polarFsInstanceId;
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
        if (isset($map['CustomBucketPathList'])) {
            if (!empty($map['CustomBucketPathList'])) {
                $model->customBucketPathList = [];
                $n1 = 0;
                foreach ($map['CustomBucketPathList'] as $item1) {
                    $model->customBucketPathList[$n1] = customBucketPathList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['PolarFsInstanceId'])) {
            $model->polarFsInstanceId = $map['PolarFsInstanceId'];
        }

        return $model;
    }
}
