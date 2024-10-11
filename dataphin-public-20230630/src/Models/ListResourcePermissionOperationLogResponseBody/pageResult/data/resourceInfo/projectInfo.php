<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListResourcePermissionOperationLogResponseBody\pageResult\data\resourceInfo;

use AlibabaCloud\Tea\Model;

class projectInfo extends Model
{
    /**
     * @example xx
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
     * @example 1123131
     *
     * @var int
     */
    public $id;

    /**
     * @example xx
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'displayName' => 'DisplayName',
        'env'         => 'Env',
        'id'          => 'Id',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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

        return $model;
    }
}
