<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo;

use AlibabaCloud\Tea\Model;

class columnMappings extends Model
{
    /**
     * @example dest_name
     *
     * @var string
     */
    public $destName;

    /**
     * @example source_name
     *
     * @var string
     */
    public $sourceName;

    /**
     * @example source_schema
     *
     * @var string
     */
    public $sourceSchema;

    /**
     * @example source_table
     *
     * @var string
     */
    public $sourceTable;
    protected $_name = [
        'destName'     => 'DestName',
        'sourceName'   => 'SourceName',
        'sourceSchema' => 'SourceSchema',
        'sourceTable'  => 'SourceTable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destName) {
            $res['DestName'] = $this->destName;
        }
        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }
        if (null !== $this->sourceSchema) {
            $res['SourceSchema'] = $this->sourceSchema;
        }
        if (null !== $this->sourceTable) {
            $res['SourceTable'] = $this->sourceTable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnMappings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestName'])) {
            $model->destName = $map['DestName'];
        }
        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }
        if (isset($map['SourceSchema'])) {
            $model->sourceSchema = $map['SourceSchema'];
        }
        if (isset($map['SourceTable'])) {
            $model->sourceTable = $map['SourceTable'];
        }

        return $model;
    }
}
