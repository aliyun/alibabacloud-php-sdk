<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskInfoResponseBody\taskInfo;

use AlibabaCloud\Dara\Model;

class pythonModuleList extends Model
{
    /**
     * @var int
     */
    public $moduleId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $pythonVersion;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'moduleId' => 'ModuleId',
        'name' => 'Name',
        'pythonVersion' => 'PythonVersion',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pythonVersion) {
            $res['PythonVersion'] = $this->pythonVersion;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PythonVersion'])) {
            $model->pythonVersion = $map['PythonVersion'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
