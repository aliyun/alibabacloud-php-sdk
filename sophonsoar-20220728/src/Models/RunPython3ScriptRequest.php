<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class RunPython3ScriptRequest extends Model
{
    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var string
     */
    public $pythonScript;

    /**
     * @var string
     */
    public $pythonVersion;
    protected $_name = [
        'nodeName' => 'NodeName',
        'params' => 'Params',
        'playbookUuid' => 'PlaybookUuid',
        'pythonScript' => 'PythonScript',
        'pythonVersion' => 'PythonVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->params) {
            $res['Params'] = $this->params;
        }

        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }

        if (null !== $this->pythonScript) {
            $res['PythonScript'] = $this->pythonScript;
        }

        if (null !== $this->pythonVersion) {
            $res['PythonVersion'] = $this->pythonVersion;
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
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['Params'])) {
            $model->params = $map['Params'];
        }

        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }

        if (isset($map['PythonScript'])) {
            $model->pythonScript = $map['PythonScript'];
        }

        if (isset($map['PythonVersion'])) {
            $model->pythonVersion = $map['PythonVersion'];
        }

        return $model;
    }
}
