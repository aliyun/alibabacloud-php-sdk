<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteExporterOutputRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $destName;
    protected $_name = [
        'regionId' => 'RegionId',
        'destName' => 'DestName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->destName) {
            $res['DestName'] = $this->destName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteExporterOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['DestName'])) {
            $model->destName = $map['DestName'];
        }

        return $model;
    }
}
