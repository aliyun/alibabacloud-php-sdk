<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\Tea\Model;

class slsConfigs extends Model
{
    /**
     * @description 日志目录
     *
     * @var string
     */
    public $logDir;

    /**
     * @description 日志存储
     *
     * @var string
     */
    public $logstore;

    /**
     * @description 日志项目
     *
     * @var string
     */
    public $project;

    /**
     * @description 类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'logDir'   => 'LogDir',
        'logstore' => 'Logstore',
        'project'  => 'Project',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logDir) {
            $res['LogDir'] = $this->logDir;
        }
        if (null !== $this->logstore) {
            $res['Logstore'] = $this->logstore;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slsConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogDir'])) {
            $model->logDir = $map['LogDir'];
        }
        if (isset($map['Logstore'])) {
            $model->logstore = $map['Logstore'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
