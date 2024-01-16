<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class RunPython3ScriptRequest extends Model
{
    /**
     * @description The name of the node in the playbook.
     *
     * @example python3_3
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The input parameters of the Python3 script.
     *
     * @example {
     * }
     * @var string
     */
    public $params;

    /**
     * @description The UUID of the playbook.
     *
     * >  You can call the [DescribePlaybooks](~~DescribePlaybooks~~) operation to query the UUIDs of playbooks.
     * @example 8baa6cff-319e-4ede-97bc-xxxxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @description The Python3 script.
     *
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
