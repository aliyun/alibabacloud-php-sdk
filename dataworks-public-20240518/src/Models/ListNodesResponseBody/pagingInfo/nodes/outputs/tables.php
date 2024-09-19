<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListNodesResponseBody\pagingInfo\nodes\outputs;

use AlibabaCloud\Tea\Model;

class tables extends Model
{
    /**
     * @description 表id
     *
     * @example odps.autotest.test_output_table_1
     *
     * @var string
     */
    public $guid;
    protected $_name = [
        'guid' => 'Guid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        return $model;
    }
}
