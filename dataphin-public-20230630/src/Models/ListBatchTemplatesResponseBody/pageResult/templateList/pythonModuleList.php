<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListBatchTemplatesResponseBody\pageResult\templateList;

use AlibabaCloud\Dara\Model;

class pythonModuleList extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $installTime;

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
    public $status;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'id' => 'Id',
        'installTime' => 'InstallTime',
        'name' => 'Name',
        'pythonVersion' => 'PythonVersion',
        'status' => 'Status',
        'version' => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->installTime) {
            $res['InstallTime'] = $this->installTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pythonVersion) {
            $res['PythonVersion'] = $this->pythonVersion;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstallTime'])) {
            $model->installTime = $map['InstallTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PythonVersion'])) {
            $model->pythonVersion = $map['PythonVersion'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
