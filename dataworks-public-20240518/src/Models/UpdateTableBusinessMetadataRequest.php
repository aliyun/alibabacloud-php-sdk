<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateTableBusinessMetadataRequest extends Model
{
    /**
     * @description The data table ID. You can call the ListTables operation to query the ID.
     *
     * This parameter is required.
     *
     * @example maxcompute-table:123456XXX::test_project::test_tbl
     * dlf-table:123456XXX:test_catalog:test_db::test_tbl
     * hms-table:c-abc123xxx::test_db::test_tbl
     * holo-table:h-abc123xxx::test_db:test_schema:test_tbl
     *
     * @var string
     */
    public $id;

    /**
     * @example ## introduction
     *
     * @var string
     */
    public $readme;
    protected $_name = [
        'id' => 'Id',
        'readme' => 'Readme',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->readme) {
            $res['Readme'] = $this->readme;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTableBusinessMetadataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Readme'])) {
            $model->readme = $map['Readme'];
        }

        return $model;
    }
}
