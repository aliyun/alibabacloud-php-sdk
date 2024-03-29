<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceByTagsResponseBody\items\DBInstanceTag;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var DBInstanceTag[]
     */
    public $DBInstanceTag;
    protected $_name = [
        'DBInstanceTag' => 'DBInstanceTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceTag) {
            $res['DBInstanceTag'] = [];
            if (null !== $this->DBInstanceTag && \is_array($this->DBInstanceTag)) {
                $n = 0;
                foreach ($this->DBInstanceTag as $item) {
                    $res['DBInstanceTag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceTag'])) {
            if (!empty($map['DBInstanceTag'])) {
                $model->DBInstanceTag = [];
                $n                    = 0;
                foreach ($map['DBInstanceTag'] as $item) {
                    $model->DBInstanceTag[$n++] = null !== $item ? DBInstanceTag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
