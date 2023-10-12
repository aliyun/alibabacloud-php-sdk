<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class InspectionItem extends Model
{
    /**
     * @var string
     */
    public $inspectionCrontab;

    /**
     * @var string
     */
    public $itemDescription;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;
    protected $_name = [
        'inspectionCrontab' => 'InspectionCrontab',
        'itemDescription'   => 'ItemDescription',
        'itemId'            => 'ItemId',
        'itemName'          => 'ItemName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->inspectionCrontab) {
            $res['InspectionCrontab'] = $this->inspectionCrontab;
        }
        if (null !== $this->itemDescription) {
            $res['ItemDescription'] = $this->itemDescription;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InspectionItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InspectionCrontab'])) {
            $model->inspectionCrontab = $map['InspectionCrontab'];
        }
        if (isset($map['ItemDescription'])) {
            $model->itemDescription = $map['ItemDescription'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        return $model;
    }
}
