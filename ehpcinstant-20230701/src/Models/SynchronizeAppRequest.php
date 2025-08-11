<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EhpcInstant\V20230701\Models;

use AlibabaCloud\Dara\Model;

class SynchronizeAppRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $targetRegionIds;
    protected $_name = [
        'appId' => 'AppId',
        'targetRegionIds' => 'TargetRegionIds',
    ];

    public function validate()
    {
        if (\is_array($this->targetRegionIds)) {
            Model::validateArray($this->targetRegionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->targetRegionIds) {
            if (\is_array($this->targetRegionIds)) {
                $res['TargetRegionIds'] = [];
                $n1 = 0;
                foreach ($this->targetRegionIds as $item1) {
                    $res['TargetRegionIds'][$n1] = $item1;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['TargetRegionIds'])) {
            if (!empty($map['TargetRegionIds'])) {
                $model->targetRegionIds = [];
                $n1 = 0;
                foreach ($map['TargetRegionIds'] as $item1) {
                    $model->targetRegionIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
