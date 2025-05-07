<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\OperatorBasicInfo\param;

class OperatorBasicInfo extends Model
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
    public $oid;

    /**
     * @var param
     */
    public $param;

    /**
     * @var int
     */
    public $qualityCheckType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userGroup;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'oid' => 'Oid',
        'param' => 'Param',
        'qualityCheckType' => 'QualityCheckType',
        'type' => 'Type',
        'userGroup' => 'UserGroup',
    ];

    public function validate()
    {
        if (null !== $this->param) {
            $this->param->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->oid) {
            $res['Oid'] = $this->oid;
        }

        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toArray($noStream) : $this->param;
        }

        if (null !== $this->qualityCheckType) {
            $res['QualityCheckType'] = $this->qualityCheckType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userGroup) {
            $res['UserGroup'] = $this->userGroup;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Oid'])) {
            $model->oid = $map['Oid'];
        }

        if (isset($map['Param'])) {
            $model->param = param::fromMap($map['Param']);
        }

        if (isset($map['QualityCheckType'])) {
            $model->qualityCheckType = $map['QualityCheckType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserGroup'])) {
            $model->userGroup = $map['UserGroup'];
        }

        return $model;
    }
}
