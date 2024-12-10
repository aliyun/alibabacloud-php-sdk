<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeRdsAnalysisResourceQuotasResponseBody\DBNodeClassList\DBNodeClass;
use AlibabaCloud\Tea\Model;

class DBNodeClassList extends Model
{
    /**
     * @var DBNodeClass[]
     */
    public $DBNodeClass;
    protected $_name = [
        'DBNodeClass' => 'DBNodeClass',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = [];
            if (null !== $this->DBNodeClass && \is_array($this->DBNodeClass)) {
                $n = 0;
                foreach ($this->DBNodeClass as $item) {
                    $res['DBNodeClass'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBNodeClassList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBNodeClass'])) {
            if (!empty($map['DBNodeClass'])) {
                $model->DBNodeClass = [];
                $n                  = 0;
                foreach ($map['DBNodeClass'] as $item) {
                    $model->DBNodeClass[$n++] = null !== $item ? DBNodeClass::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
