<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupSupportParamResponseBody;

use AlibabaCloud\Dara\Model;

class resourceList extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $dbType;

    /**
     * @var string
     */
    public $dbVersion;

    /**
     * @var string
     */
    public $paramName;
    protected $_name = [
        'category' => 'Category',
        'dbType' => 'DbType',
        'dbVersion' => 'DbVersion',
        'paramName' => 'ParamName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
