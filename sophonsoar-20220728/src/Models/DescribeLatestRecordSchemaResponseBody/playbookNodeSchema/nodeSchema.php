<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeLatestRecordSchemaResponseBody\playbookNodeSchema;

use AlibabaCloud\Dara\Model;

class nodeSchema extends Model
{
    /**
     * @var string
     */
    public $actionName;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string[]
     */
    public $outputFields;
    protected $_name = [
        'actionName' => 'ActionName',
        'componentName' => 'ComponentName',
        'nodeName' => 'NodeName',
        'outputFields' => 'OutputFields',
    ];

    public function validate()
    {
        if (\is_array($this->outputFields)) {
            Model::validateArray($this->outputFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->outputFields)) {
                $res['OutputFields'] = [];
                $n1 = 0;
                foreach ($this->outputFields as $item1) {
                    $res['OutputFields'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->outputFields = [];
                $n1 = 0;
                foreach ($map['OutputFields'] as $item1) {
                    $model->outputFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
