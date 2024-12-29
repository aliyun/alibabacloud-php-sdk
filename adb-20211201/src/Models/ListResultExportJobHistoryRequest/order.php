<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\ListResultExportJobHistoryRequest;

use AlibabaCloud\Tea\Model;

class order extends Model
{
    /**
     * @description The field that is used to sort the SQL statements. Valid values:
     *
     *   CreateTime
     *   DatabaseUser
     *   TimeCost
     *   ResourceGroup
     *   Status
     *   Progress
     *   ExportRows
     *
     * @example DatabaseUser
     *
     * @var string
     */
    public $field;

    /**
     * @description The sorting order. Valid values (case-insensitive):
     *
     *   **Desc**: descending order.
     *   **Asc**: ascending order.
     *
     * @example Desc
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'field' => 'Field',
        'type'  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return order
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
