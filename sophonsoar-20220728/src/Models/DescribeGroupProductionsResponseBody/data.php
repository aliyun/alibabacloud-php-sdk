<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeGroupProductionsResponseBody;

use AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeGroupProductionsResponseBody\data\productions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var productions[]
     */
    public $productions;
    protected $_name = [
        'groupName' => 'GroupName',
        'productions' => 'Productions',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->productions) {
            $res['Productions'] = [];
            if (null !== $this->productions && \is_array($this->productions)) {
                $n = 0;
                foreach ($this->productions as $item) {
                    $res['Productions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['Productions'])) {
            if (!empty($map['Productions'])) {
                $model->productions = [];
                $n = 0;
                foreach ($map['Productions'] as $item) {
                    $model->productions[$n++] = null !== $item ? productions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
