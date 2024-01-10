<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo;

use AlibabaCloud\Tea\Model;

class schemaMappings extends Model
{
    /**
     * @example mapped_schema
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
    protected $_name = [
        'destName'   => 'DestName',
        'sourceName' => 'SourceName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemaMappings
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

        return $model;
    }
}
