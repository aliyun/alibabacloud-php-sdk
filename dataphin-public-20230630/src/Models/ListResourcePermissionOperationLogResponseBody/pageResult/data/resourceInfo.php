<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult\data;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult\data\resourceInfo\bizUnitInfo;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult\data\resourceInfo\projectInfo;
use AlibabaCloud\Tea\Model;

class resourceInfo extends Model
{
    /**
     * @var bizUnitInfo
     */
    public $bizUnitInfo;

    /**
     * @example tb1
     *
     * @var string
     */
    public $displayName;

    /**
     * @example DEV
     *
     * @var string
     */
    public $env;

    /**
     * @example a.tb1
     *
     * @var string
     */
    public $id;

    /**
     * @example tb1
     *
     * @var string
     */
    public $name;

    /**
     * @var projectInfo
     */
    public $projectInfo;

    /**
     * @example PHYSICAL_TABLE
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bizUnitInfo' => 'BizUnitInfo',
        'displayName' => 'DisplayName',
        'env'         => 'Env',
        'id'          => 'Id',
        'name'        => 'Name',
        'projectInfo' => 'ProjectInfo',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizUnitInfo) {
            $res['BizUnitInfo'] = null !== $this->bizUnitInfo ? $this->bizUnitInfo->toMap() : null;
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
            $res['ProjectInfo'] = null !== $this->projectInfo ? $this->projectInfo->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceInfo
     */
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
