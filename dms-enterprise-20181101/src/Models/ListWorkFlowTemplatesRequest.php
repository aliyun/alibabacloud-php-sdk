<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListWorkFlowTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $searchName;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'regionId'   => 'RegionId',
        'searchName' => 'SearchName',
        'tid'        => 'Tid',
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
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkFlowTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
