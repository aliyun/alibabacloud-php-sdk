<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeParameterGroupResponseBody\parameterGroup\paramGroupsDetails;
use AlibabaCloud\Tea\Model;

class parameterGroup extends Model
{
    /**
     * @description The service category. Valid values:
     *
     *   **0**: Community Edition
     *   **1**: Enhanced Edition (Tair)
     *
     * @example 1
     *
     * @var int
     */
    public $category;

    /**
     * @description The time when the parameter template was created.
     *
     * @example 2023-04-18 16:32:45
     *
     * @var string
     */
    public $created;

    /**
     * @example redis
     *
     * @var string
     */
    public $engine;

    /**
     * @description The compatible engine version.
     *
     * @example 5.0
     *
     * @var string
     */
    public $engineVersion;

    /**
     * @description The time when the parameter template was last modified.
     *
     * @example 2023-04-18 16:32:45
     *
     * @var string
     */
    public $modified;

    /**
     * @description The parameter template ID, which is globally unique.
     *
     * @example sys-001*****
     *
     * @var string
     */
    public $paramGroupId;

    /**
     * @description The parameter details of the parameter template.
     *
     * @var paramGroupsDetails[]
     */
    public $paramGroupsDetails;

    /**
     * @description The description of the parameter template.
     *
     * @example test
     *
     * @var string
     */
    public $parameterGroupDesc;

    /**
     * @description The name of the parameter template.
     *
     * @example testGroupName
     *
     * @var string
     */
    public $parameterGroupName;
    protected $_name = [
        'category'           => 'Category',
        'created'            => 'Created',
        'engine'             => 'Engine',
        'engineVersion'      => 'EngineVersion',
        'modified'           => 'Modified',
        'paramGroupId'       => 'ParamGroupId',
        'paramGroupsDetails' => 'ParamGroupsDetails',
        'parameterGroupDesc' => 'ParameterGroupDesc',
        'parameterGroupName' => 'ParameterGroupName',
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
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->engineVersion) {
            $res['EngineVersion'] = $this->engineVersion;
        }
        if (null !== $this->modified) {
            $res['Modified'] = $this->modified;
        }
        if (null !== $this->paramGroupId) {
            $res['ParamGroupId'] = $this->paramGroupId;
        }
        if (null !== $this->paramGroupsDetails) {
            $res['ParamGroupsDetails'] = [];
            if (null !== $this->paramGroupsDetails && \is_array($this->paramGroupsDetails)) {
                $n = 0;
                foreach ($this->paramGroupsDetails as $item) {
                    $res['ParamGroupsDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parameterGroupDesc) {
            $res['ParameterGroupDesc'] = $this->parameterGroupDesc;
        }
        if (null !== $this->parameterGroupName) {
            $res['ParameterGroupName'] = $this->parameterGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['EngineVersion'])) {
            $model->engineVersion = $map['EngineVersion'];
        }
        if (isset($map['Modified'])) {
            $model->modified = $map['Modified'];
        }
        if (isset($map['ParamGroupId'])) {
            $model->paramGroupId = $map['ParamGroupId'];
        }
        if (isset($map['ParamGroupsDetails'])) {
            if (!empty($map['ParamGroupsDetails'])) {
                $model->paramGroupsDetails = [];
                $n                         = 0;
                foreach ($map['ParamGroupsDetails'] as $item) {
                    $model->paramGroupsDetails[$n++] = null !== $item ? paramGroupsDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ParameterGroupDesc'])) {
            $model->parameterGroupDesc = $map['ParameterGroupDesc'];
        }
        if (isset($map['ParameterGroupName'])) {
            $model->parameterGroupName = $map['ParameterGroupName'];
        }

        return $model;
    }
}
