<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListRecallManagementServiceVersionsResponseBody;

use AlibabaCloud\Dara\Model;

class recallManagementServiceVersions extends Model
{
    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var bool
     */
    public $isEffective;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $recallManagementServiceVersionId;
    protected $_name = [
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'isEffective' => 'IsEffective',
        'name' => 'Name',
        'recallManagementServiceVersionId' => 'RecallManagementServiceVersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->isEffective) {
            $res['IsEffective'] = $this->isEffective;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->recallManagementServiceVersionId) {
            $res['RecallManagementServiceVersionId'] = $this->recallManagementServiceVersionId;
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
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['IsEffective'])) {
            $model->isEffective = $map['IsEffective'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['RecallManagementServiceVersionId'])) {
            $model->recallManagementServiceVersionId = $map['RecallManagementServiceVersionId'];
        }

        return $model;
    }
}
