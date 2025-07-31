<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDataDomainRequest;

use AlibabaCloud\Tea\Model;

class updateCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example dm_code_name
     *
     * @var string
     */
    public $abbreviation;

    /**
     * @description This parameter is required.
     *
     * @example 545844456
     *
     * @var int
     */
    public $bizUnitId;

    /**
     * @description This parameter is required.
     *
     * @example 1241844456
     *
     * @var int
     */
    public $dataDomainId;

    /**
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 主题域测试
     *
     * @var string
     */
    public $displayName;

    /**
     * @description This parameter is required.
     *
     * @example dm_code_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 10232311
     *
     * @var int
     */
    public $parentId;
    protected $_name = [
        'abbreviation' => 'Abbreviation',
        'bizUnitId' => 'BizUnitId',
        'dataDomainId' => 'DataDomainId',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'name' => 'Name',
        'parentId' => 'ParentId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->abbreviation) {
            $res['Abbreviation'] = $this->abbreviation;
        }
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }
        if (null !== $this->dataDomainId) {
            $res['DataDomainId'] = $this->dataDomainId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return updateCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Abbreviation'])) {
            $model->abbreviation = $map['Abbreviation'];
        }
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }
        if (isset($map['DataDomainId'])) {
            $model->dataDomainId = $map['DataDomainId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }

        return $model;
    }
}
