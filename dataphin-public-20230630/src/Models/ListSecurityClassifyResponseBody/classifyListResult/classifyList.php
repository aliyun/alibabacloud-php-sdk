<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListSecurityClassifyResponseBody\classifyListResult;

use AlibabaCloud\Dara\Model;

class classifyList extends Model
{
    /**
     * @var string
     */
    public $catalogPath;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $effectiveFieldCount;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isBindDesensitizeRule;

    /**
     * @var int
     */
    public $levelId;

    /**
     * @var string
     */
    public $levelName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $shortName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'catalogPath' => 'CatalogPath',
        'description' => 'Description',
        'effectiveFieldCount' => 'EffectiveFieldCount',
        'id' => 'Id',
        'isBindDesensitizeRule' => 'IsBindDesensitizeRule',
        'levelId' => 'LevelId',
        'levelName' => 'LevelName',
        'name' => 'Name',
        'priority' => 'Priority',
        'shortName' => 'ShortName',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogPath) {
            $res['CatalogPath'] = $this->catalogPath;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->effectiveFieldCount) {
            $res['EffectiveFieldCount'] = $this->effectiveFieldCount;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isBindDesensitizeRule) {
            $res['IsBindDesensitizeRule'] = $this->isBindDesensitizeRule;
        }

        if (null !== $this->levelId) {
            $res['LevelId'] = $this->levelId;
        }

        if (null !== $this->levelName) {
            $res['LevelName'] = $this->levelName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->shortName) {
            $res['ShortName'] = $this->shortName;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CatalogPath'])) {
            $model->catalogPath = $map['CatalogPath'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EffectiveFieldCount'])) {
            $model->effectiveFieldCount = $map['EffectiveFieldCount'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsBindDesensitizeRule'])) {
            $model->isBindDesensitizeRule = $map['IsBindDesensitizeRule'];
        }

        if (isset($map['LevelId'])) {
            $model->levelId = $map['LevelId'];
        }

        if (isset($map['LevelName'])) {
            $model->levelName = $map['LevelName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ShortName'])) {
            $model->shortName = $map['ShortName'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
