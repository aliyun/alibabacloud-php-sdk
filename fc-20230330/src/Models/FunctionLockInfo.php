<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class FunctionLockInfo extends Model
{
    /**
     * @var string
     */
    public $lockedAt;

    /**
     * @var string
     */
    public $lockedBy;

    /**
     * @var string[]
     */
    public $lockedResources;
    protected $_name = [
        'lockedAt' => 'lockedAt',
        'lockedBy' => 'lockedBy',
        'lockedResources' => 'lockedResources',
    ];

    public function validate()
    {
        if (\is_array($this->lockedResources)) {
            Model::validateArray($this->lockedResources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lockedAt) {
            $res['lockedAt'] = $this->lockedAt;
        }

        if (null !== $this->lockedBy) {
            $res['lockedBy'] = $this->lockedBy;
        }

        if (null !== $this->lockedResources) {
            if (\is_array($this->lockedResources)) {
                $res['lockedResources'] = [];
                $n1 = 0;
                foreach ($this->lockedResources as $item1) {
                    $res['lockedResources'][$n1] = $item1;
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
        if (isset($map['lockedAt'])) {
            $model->lockedAt = $map['lockedAt'];
        }

        if (isset($map['lockedBy'])) {
            $model->lockedBy = $map['lockedBy'];
        }

        if (isset($map['lockedResources'])) {
            if (!empty($map['lockedResources'])) {
                $model->lockedResources = [];
                $n1 = 0;
                foreach ($map['lockedResources'] as $item1) {
                    $model->lockedResources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
