<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsReportDetailsResponseBody\sceneSnapShot\relationList\apiList;

use AlibabaCloud\Tea\Model;

class exportList extends Model
{
    /**
     * @var string
     */
    public $count;

    /**
     * @var string
     */
    public $exportName;

    /**
     * @var string
     */
    public $exportType;

    /**
     * @var string
     */
    public $exportValue;
    protected $_name = [
        'count'       => 'Count',
        'exportName'  => 'ExportName',
        'exportType'  => 'ExportType',
        'exportValue' => 'ExportValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->exportName) {
            $res['ExportName'] = $this->exportName;
        }
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }
        if (null !== $this->exportValue) {
            $res['ExportValue'] = $this->exportValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return exportList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['ExportName'])) {
            $model->exportName = $map['ExportName'];
        }
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }
        if (isset($map['ExportValue'])) {
            $model->exportValue = $map['ExportValue'];
        }

        return $model;
    }
}
