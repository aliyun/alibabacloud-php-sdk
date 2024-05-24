<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class SqlStatementWithContext extends Model
{
    /**
     * @var string[]
     */
    public $additionalDependencies;

    /**
     * @description This parameter is required.
     *
     * @var bool
     */
    public $batchMode;

    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $database;

    /**
     * @var mixed[]
     */
    public $flinkConfiguration;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $statement;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'additionalDependencies' => 'additionalDependencies',
        'batchMode'              => 'batchMode',
        'catalog'                => 'catalog',
        'database'               => 'database',
        'flinkConfiguration'     => 'flinkConfiguration',
        'statement'              => 'statement',
        'versionName'            => 'versionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalDependencies) {
            $res['additionalDependencies'] = $this->additionalDependencies;
        }
        if (null !== $this->batchMode) {
            $res['batchMode'] = $this->batchMode;
        }
        if (null !== $this->catalog) {
            $res['catalog'] = $this->catalog;
        }
        if (null !== $this->database) {
            $res['database'] = $this->database;
        }
        if (null !== $this->flinkConfiguration) {
            $res['flinkConfiguration'] = $this->flinkConfiguration;
        }
        if (null !== $this->statement) {
            $res['statement'] = $this->statement;
        }
        if (null !== $this->versionName) {
            $res['versionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SqlStatementWithContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['additionalDependencies'])) {
            if (!empty($map['additionalDependencies'])) {
                $model->additionalDependencies = $map['additionalDependencies'];
            }
        }
        if (isset($map['batchMode'])) {
            $model->batchMode = $map['batchMode'];
        }
        if (isset($map['catalog'])) {
            $model->catalog = $map['catalog'];
        }
        if (isset($map['database'])) {
            $model->database = $map['database'];
        }
        if (isset($map['flinkConfiguration'])) {
            $model->flinkConfiguration = $map['flinkConfiguration'];
        }
        if (isset($map['statement'])) {
            $model->statement = $map['statement'];
        }
        if (isset($map['versionName'])) {
            $model->versionName = $map['versionName'];
        }

        return $model;
    }
}
