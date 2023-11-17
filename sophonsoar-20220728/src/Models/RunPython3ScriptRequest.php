<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class RunPython3ScriptRequest extends Model
{
    /**
     * @example python3_3
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example {
     * }
     * @var string
     */
    public $params;

    /**
     * @example 8baa6cff-319e-4ede-97bc-xxxxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @example import logging
     * return (success,message,data)
     * @var string
     */
    public $pythonScript;
    protected $_name = [
        'nodeName'     => 'NodeName',
        'params'       => 'Params',
        'playbookUuid' => 'PlaybookUuid',
        'pythonScript' => 'PythonScript',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunPython3ScriptRequest
     */
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

        return $model;
    }
}
