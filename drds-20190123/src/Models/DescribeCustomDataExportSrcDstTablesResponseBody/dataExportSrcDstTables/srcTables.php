<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeCustomDataExportSrcDstTablesResponseBody\dataExportSrcDstTables;

use AlibabaCloud\Tea\Model;

class srcTables extends Model
{
    /**
     * @var string[]
     */
    public $srcTables;
    protected $_name = [
        'srcTables' => 'SrcTables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->srcTables) {
            $res['SrcTables'] = $this->srcTables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return srcTables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SrcTables'])) {
            if (!empty($map['SrcTables'])) {
                $model->srcTables = $map['SrcTables'];
            }
        }

        return $model;
    }
}
