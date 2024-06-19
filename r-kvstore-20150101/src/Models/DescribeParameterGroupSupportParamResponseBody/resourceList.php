<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupSupportParamResponseBody;

use AlibabaCloud\Tea\Model;

class resourceList extends Model
{
    /**
     * @description The service category.
     *
     * @example standard
     *
     * @var string
     */
    public $category;

    /**
     * @description The engine type.
     *
     * @example redis
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The engine version.
     *
     * @example 5
     *
     * @var string
     */
    public $dbVersion;

    /**
     * @description The name of the parameter.
     *
     * @example rt_threshold_ms
     *
     * @var string
     */
    public $paramName;
    protected $_name = [
        'category'  => 'Category',
        'dbType'    => 'DbType',
        'dbVersion' => 'DbVersion',
        'paramName' => 'ParamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->dbVersion) {
            $res['DbVersion'] = $this->dbVersion;
        }
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['DbVersion'])) {
            $model->dbVersion = $map['DbVersion'];
        }
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }

        return $model;
    }
}
