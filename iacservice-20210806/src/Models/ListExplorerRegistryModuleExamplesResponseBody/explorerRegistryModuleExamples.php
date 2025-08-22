<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListExplorerRegistryModuleExamplesResponseBody;

use AlibabaCloud\Dara\Model;

class explorerRegistryModuleExamples extends Model
{
    /**
     * @var string
     */
    public $exampleName;

    /**
     * @var string
     */
    public $examplePath;

    /**
     * @var mixed[]
     */
    public $exampleSchema;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'exampleName' => 'exampleName',
        'examplePath' => 'examplePath',
        'exampleSchema' => 'exampleSchema',
        'moduleName' => 'moduleName',
        'moduleVersion' => 'moduleVersion',
        'namespaceName' => 'namespaceName',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->exampleSchema)) {
            Model::validateArray($this->exampleSchema);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exampleName) {
            $res['exampleName'] = $this->exampleName;
        }

        if (null !== $this->examplePath) {
            $res['examplePath'] = $this->examplePath;
        }

        if (null !== $this->exampleSchema) {
            if (\is_array($this->exampleSchema)) {
                $res['exampleSchema'] = [];
                foreach ($this->exampleSchema as $key1 => $value1) {
                    $res['exampleSchema'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->moduleName) {
            $res['moduleName'] = $this->moduleName;
        }

        if (null !== $this->moduleVersion) {
            $res['moduleVersion'] = $this->moduleVersion;
        }

        if (null !== $this->namespaceName) {
            $res['namespaceName'] = $this->namespaceName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['exampleName'])) {
            $model->exampleName = $map['exampleName'];
        }

        if (isset($map['examplePath'])) {
            $model->examplePath = $map['examplePath'];
        }

        if (isset($map['exampleSchema'])) {
            if (!empty($map['exampleSchema'])) {
                $model->exampleSchema = [];
                foreach ($map['exampleSchema'] as $key1 => $value1) {
                    $model->exampleSchema[$key1] = $value1;
                }
            }
        }

        if (isset($map['moduleName'])) {
            $model->moduleName = $map['moduleName'];
        }

        if (isset($map['moduleVersion'])) {
            $model->moduleVersion = $map['moduleVersion'];
        }

        if (isset($map['namespaceName'])) {
            $model->namespaceName = $map['namespaceName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
