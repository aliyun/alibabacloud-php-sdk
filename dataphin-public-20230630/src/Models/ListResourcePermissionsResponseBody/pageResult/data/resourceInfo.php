<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data\resourceInfo\bizUnitInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionsResponseBody\pageResult\data\resourceInfo\projectInfo;

class resourceInfo extends Model
{
    /**
     * @var bizUnitInfo
     */
    public $bizUnitInfo;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var projectInfo
     */
    public $projectInfo;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizUnitInfo' => 'BizUnitInfo',
        'displayName' => 'DisplayName',
        'env' => 'Env',
        'id' => 'Id',
        'name' => 'Name',
        'projectInfo' => 'ProjectInfo',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->bizUnitInfo) {
            $this->bizUnitInfo->validate();
        }
        if (null !== $this->projectInfo) {
            $this->projectInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitInfo) {
            $res['BizUnitInfo'] = null !== $this->bizUnitInfo ? $this->bizUnitInfo->toArray($noStream) : $this->bizUnitInfo;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->projectInfo) {
            $res['ProjectInfo'] = null !== $this->projectInfo ? $this->projectInfo->toArray($noStream) : $this->projectInfo;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['BizUnitInfo'])) {
            $model->bizUnitInfo = bizUnitInfo::fromMap($map['BizUnitInfo']);
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProjectInfo'])) {
            $model->projectInfo = projectInfo::fromMap($map['ProjectInfo']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
