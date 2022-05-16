<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiPlugin\V20220112\Models\UpdateCampaignResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 创建时间 (UTC+8)。
     *
     * @var string
     */
    public $createdTime;

    /**
     * @description 运营活动Id。
     *
     * @var string
     */
    public $id;

    /**
     * @description 运营活动名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 备注。
     *
     * @var string
     */
    public $remark;

    /**
     * @description 更新时间 (UTC+8)。
     *
     * @var string
     */
    public $updatedTime;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'id'          => 'Id',
        'name'        => 'Name',
        'remark'      => 'Remark',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
