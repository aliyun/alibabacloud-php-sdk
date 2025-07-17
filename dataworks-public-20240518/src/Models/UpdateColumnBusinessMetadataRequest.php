<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateColumnBusinessMetadataRequest extends Model
{
    /**
     * @example test description
     *
     * @var string
     */
    public $description;

    /**
     * @description The column ID. You can call the ListColumns operation to query the ID. For more information, see [Concepts related to metadata entities](https://help.aliyun.com/document_detail/2880092.html).
     *
     * This parameter is required.
     *
     * @example maxcompute-column:11075xxxx::test_project:test_schema:test_table:test_column
     *
     * @var string
     */
    public $id;
    protected $_name = [
        'description' => 'Description',
        'id' => 'Id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateColumnBusinessMetadataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
