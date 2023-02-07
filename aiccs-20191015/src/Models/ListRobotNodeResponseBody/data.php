<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\ListRobotNodeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $isOutput;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @example 123456
     *
     * @var string
     */
    public $nodeIdentifier;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $processName;
    protected $_name = [
        'isOutput'       => 'IsOutput',
        'modelName'      => 'ModelName',
        'nodeIdentifier' => 'NodeIdentifier',
        'nodeName'       => 'NodeName',
        'processName'    => 'ProcessName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isOutput) {
            $res['IsOutput'] = $this->isOutput;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->nodeIdentifier) {
            $res['NodeIdentifier'] = $this->nodeIdentifier;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsOutput'])) {
            $model->isOutput = $map['IsOutput'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['NodeIdentifier'])) {
            $model->nodeIdentifier = $map['NodeIdentifier'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        return $model;
    }
}
