<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeCustomDataImportSrcDstTablesResponseBody\dataImportSrcDstTables;

use AlibabaCloud\Tea\Model;

class dstTables extends Model
{
    /**
     * @var string[]
     */
    public $dstTables;
    protected $_name = [
        'dstTables' => 'DstTables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstTables) {
            $res['DstTables'] = $this->dstTables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dstTables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstTables'])) {
            if (!empty($map['DstTables'])) {
                $model->dstTables = $map['DstTables'];
            }
        }

        return $model;
    }
}
