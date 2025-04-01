<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\ListProjectModifyRecordsResponseBody\data\omsProjectMappingInfo;

use AlibabaCloud\Dara\Model;

class schemaMappings extends Model
{
    /**
     * @var string
     */
    public $destName;

    /**
     * @var string
     */
    public $sourceName;
    protected $_name = [
        'destName' => 'DestName',
        'sourceName' => 'SourceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
