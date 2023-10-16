<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\CheckIfCollectedResponseBody\data;

use AlibabaCloud\Tea\Model;

class trademark extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $itemIdList;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'id'         => 'Id',
        'itemIdList' => 'ItemIdList',
        'name'       => 'Name',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->itemIdList) {
            $res['ItemIdList'] = $this->itemIdList;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return trademark
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ItemIdList'])) {
            $model->itemIdList = $map['ItemIdList'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
