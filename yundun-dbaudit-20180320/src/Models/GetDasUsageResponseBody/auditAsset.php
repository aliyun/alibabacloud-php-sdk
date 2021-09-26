<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody;

use AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetDasUsageResponseBody\auditAsset\dbTypes;
use AlibabaCloud\Tea\Model;

class auditAsset extends Model
{
    /**
     * @var int
     */
    public $dbCount;

    /**
     * @var dbTypes[]
     */
    public $dbTypes;
    protected $_name = [
        'dbCount' => 'DbCount',
        'dbTypes' => 'DbTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbCount) {
            $res['DbCount'] = $this->dbCount;
        }
        if (null !== $this->dbTypes) {
            $res['DbTypes'] = [];
            if (null !== $this->dbTypes && \is_array($this->dbTypes)) {
                $n = 0;
                foreach ($this->dbTypes as $item) {
                    $res['DbTypes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return auditAsset
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbCount'])) {
            $model->dbCount = $map['DbCount'];
        }
        if (isset($map['DbTypes'])) {
            if (!empty($map['DbTypes'])) {
                $model->dbTypes = [];
                $n              = 0;
                foreach ($map['DbTypes'] as $item) {
                    $model->dbTypes[$n++] = null !== $item ? dbTypes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
