<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class DecreaseNodeGroupParam extends Model
{
    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string[]
     */
    public $releaseInstanceIds;
    protected $_name = [
        'nodeGroupId' => 'NodeGroupId',
        'releaseInstanceIds' => 'ReleaseInstanceIds',
    ];

    public function validate()
    {
        if (\is_array($this->releaseInstanceIds)) {
            Model::validateArray($this->releaseInstanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->releaseInstanceIds) {
            if (\is_array($this->releaseInstanceIds)) {
                $res['ReleaseInstanceIds'] = [];
                $n1 = 0;
                foreach ($this->releaseInstanceIds as $item1) {
                    $res['ReleaseInstanceIds'][$n1] = $item1;
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
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['ReleaseInstanceIds'])) {
            if (!empty($map['ReleaseInstanceIds'])) {
                $model->releaseInstanceIds = [];
                $n1 = 0;
                foreach ($map['ReleaseInstanceIds'] as $item1) {
                    $model->releaseInstanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
