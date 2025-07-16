<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models\Permission;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @var string[]
     */
    public $columnNames;

    /**
     * @var string[]
     */
    public $excludedColumnNames;
    protected $_name = [
        'columnNames' => 'columnNames',
        'excludedColumnNames' => 'excludedColumnNames',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->columnNames) {
            $res['columnNames'] = $this->columnNames;
        }
        if (null !== $this->excludedColumnNames) {
            $res['excludedColumnNames'] = $this->excludedColumnNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['columnNames'])) {
            if (!empty($map['columnNames'])) {
                $model->columnNames = $map['columnNames'];
            }
        }
        if (isset($map['excludedColumnNames'])) {
            if (!empty($map['excludedColumnNames'])) {
                $model->excludedColumnNames = $map['excludedColumnNames'];
            }
        }

        return $model;
    }
}
