<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo;

use AlibabaCloud\Tea\Model;

class tableMappings extends Model
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
    protected $_name = [
        'destName'     => 'DestName',
        'sourceName'   => 'SourceName',
        'sourceSchema' => 'SourceSchema',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tableMappings
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

        return $model;
    }
}
