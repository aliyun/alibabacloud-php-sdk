<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetPartitionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ds=20250101
     *
     * @var string
     */
    public $name;

    /**
     * @description The table ID. For more details, refer to the response of the ListTables operation and [description of concepts related to metadata entities.](https://help.aliyun.com/document_detail/2880092.html)
     *
     * This parameter is required.
     *
     * @example maxcompute-column:11075xxxx::test_project:test_schema:test_table
     *
     * @var string
     */
    public $tableId;
    protected $_name = [
        'name' => 'Name',
        'tableId' => 'TableId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tableId) {
            $res['TableId'] = $this->tableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPartitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TableId'])) {
            $model->tableId = $map['TableId'];
        }

        return $model;
    }
}
