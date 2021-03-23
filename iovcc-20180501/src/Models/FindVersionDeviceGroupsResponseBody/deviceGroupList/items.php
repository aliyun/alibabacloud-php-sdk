<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\FindVersionDeviceGroupsResponseBody\deviceGroupList;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $maxCount;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var int
     */
    public $gmtModifyTimestamp;
    protected $_name = [
        'id'                 => 'Id',
        'name'               => 'Name',
        'gmtCreate'          => 'GmtCreate',
        'gmtModify'          => 'GmtModify',
        'description'        => 'Description',
        'maxCount'           => 'MaxCount',
        'gmtCreateTimestamp' => 'GmtCreateTimestamp',
        'gmtModifyTimestamp' => 'GmtModifyTimestamp',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModifyTimestamp) {
            $res['GmtModifyTimestamp'] = $this->gmtModifyTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModifyTimestamp'])) {
            $model->gmtModifyTimestamp = $map['GmtModifyTimestamp'];
        }

        return $model;
    }
}
