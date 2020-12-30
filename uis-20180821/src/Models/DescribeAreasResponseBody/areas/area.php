<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeAreasResponseBody\areas;

use AlibabaCloud\Tea\Model;

class area extends Model
{
    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $areaId;
    protected $_name = [
        'localName' => 'LocalName',
        'areaId'    => 'AreaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->localName) {
            $res['LocalName'] = $this->localName;
        }
        if (null !== $this->areaId) {
            $res['AreaId'] = $this->areaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return area
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocalName'])) {
            $model->localName = $map['LocalName'];
        }
        if (isset($map['AreaId'])) {
            $model->areaId = $map['AreaId'];
        }

        return $model;
    }
}
