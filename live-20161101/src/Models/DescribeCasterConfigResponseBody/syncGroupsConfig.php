<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterConfigResponseBody\syncGroupsConfig\syncGroup;

class syncGroupsConfig extends Model
{
    /**
     * @var syncGroup[]
     */
    public $syncGroup;
    protected $_name = [
        'syncGroup' => 'SyncGroup',
    ];

    public function validate()
    {
        if (\is_array($this->syncGroup)) {
            Model::validateArray($this->syncGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->syncGroup) {
            if (\is_array($this->syncGroup)) {
                $res['SyncGroup'] = [];
                $n1 = 0;
                foreach ($this->syncGroup as $item1) {
                    $res['SyncGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SyncGroup'])) {
            if (!empty($map['SyncGroup'])) {
                $model->syncGroup = [];
                $n1 = 0;
                foreach ($map['SyncGroup'] as $item1) {
                    $model->syncGroup[$n1] = syncGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
