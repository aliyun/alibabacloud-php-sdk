<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeLatestRecordSchemaResponseBody\playbookNodeSchema;

use AlibabaCloud\Tea\Model;

class nodeSchema extends Model
{
    /**
     * @description The action name of the component.
     *
     * @example formatedata
     *
     * @var string
     */
    public $actionName;

    /**
     * @description The name of the component.
     *
     * @example DataFormat
     *
     * @var string
     */
    public $componentName;

    /**
     * @description The name of the node.
     *
     * @example DataFormat_1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The output fields.
     *
     * @var string[]
     */
    public $outputFields;
    protected $_name = [
        'actionName'    => 'ActionName',
        'componentName' => 'ComponentName',
        'nodeName'      => 'NodeName',
        'outputFields'  => 'OutputFields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->outputFields) {
            $res['OutputFields'] = $this->outputFields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeSchema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['OutputFields'])) {
            if (!empty($map['OutputFields'])) {
                $model->outputFields = $map['OutputFields'];
            }
        }

        return $model;
    }
}
