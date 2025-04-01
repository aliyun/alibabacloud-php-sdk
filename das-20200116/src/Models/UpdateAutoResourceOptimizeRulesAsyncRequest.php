<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Dara\Model;

class UpdateAutoResourceOptimizeRulesAsyncRequest extends Model
{
    /**
     * @var string
     */
    public $consoleContext;

    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $resultId;

    /**
     * @var float
     */
    public $tableFragmentationRatio;

    /**
     * @var float
     */
    public $tableSpaceSize;
    protected $_name = [
        'consoleContext' => 'ConsoleContext',
        'instanceIds' => 'InstanceIds',
        'resultId' => 'ResultId',
        'tableFragmentationRatio' => 'TableFragmentationRatio',
        'tableSpaceSize' => 'TableSpaceSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consoleContext) {
            $res['ConsoleContext'] = $this->consoleContext;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }

        if (null !== $this->resultId) {
            $res['ResultId'] = $this->resultId;
        }

        if (null !== $this->tableFragmentationRatio) {
            $res['TableFragmentationRatio'] = $this->tableFragmentationRatio;
        }

        if (null !== $this->tableSpaceSize) {
            $res['TableSpaceSize'] = $this->tableSpaceSize;
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
        if (isset($map['ConsoleContext'])) {
            $model->consoleContext = $map['ConsoleContext'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }

        if (isset($map['ResultId'])) {
            $model->resultId = $map['ResultId'];
        }

        if (isset($map['TableFragmentationRatio'])) {
            $model->tableFragmentationRatio = $map['TableFragmentationRatio'];
        }

        if (isset($map['TableSpaceSize'])) {
            $model->tableSpaceSize = $map['TableSpaceSize'];
        }

        return $model;
    }
}
