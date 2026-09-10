<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\GetSqlConversionResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LHM\V20250116\Models\GetSqlConversionResultResponseBody\data\tableMappingList;

class data extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $finishTime;

    /**
     * @var int
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var string
     */
    public $scriptTransformStatus;

    /**
     * @var string
     */
    public $sqlResultContent;

    /**
     * @var string
     */
    public $sqlSourceContent;

    /**
     * @var tableMappingList[]
     */
    public $tableMappingList;
    protected $_name = [
        'errorMessage' => 'errorMessage',
        'finishTime' => 'finishTime',
        'scriptId' => 'scriptId',
        'scriptName' => 'scriptName',
        'scriptTransformStatus' => 'scriptTransformStatus',
        'sqlResultContent' => 'sqlResultContent',
        'sqlSourceContent' => 'sqlSourceContent',
        'tableMappingList' => 'tableMappingList',
    ];

    public function validate()
    {
        if (\is_array($this->tableMappingList)) {
            Model::validateArray($this->tableMappingList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['errorMessage'] = $this->errorMessage;
        }

        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }

        if (null !== $this->scriptId) {
            $res['scriptId'] = $this->scriptId;
        }

        if (null !== $this->scriptName) {
            $res['scriptName'] = $this->scriptName;
        }

        if (null !== $this->scriptTransformStatus) {
            $res['scriptTransformStatus'] = $this->scriptTransformStatus;
        }

        if (null !== $this->sqlResultContent) {
            $res['sqlResultContent'] = $this->sqlResultContent;
        }

        if (null !== $this->sqlSourceContent) {
            $res['sqlSourceContent'] = $this->sqlSourceContent;
        }

        if (null !== $this->tableMappingList) {
            if (\is_array($this->tableMappingList)) {
                $res['tableMappingList'] = [];
                $n1 = 0;
                foreach ($this->tableMappingList as $item1) {
                    $res['tableMappingList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['errorMessage'])) {
            $model->errorMessage = $map['errorMessage'];
        }

        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }

        if (isset($map['scriptId'])) {
            $model->scriptId = $map['scriptId'];
        }

        if (isset($map['scriptName'])) {
            $model->scriptName = $map['scriptName'];
        }

        if (isset($map['scriptTransformStatus'])) {
            $model->scriptTransformStatus = $map['scriptTransformStatus'];
        }

        if (isset($map['sqlResultContent'])) {
            $model->sqlResultContent = $map['sqlResultContent'];
        }

        if (isset($map['sqlSourceContent'])) {
            $model->sqlSourceContent = $map['sqlSourceContent'];
        }

        if (isset($map['tableMappingList'])) {
            if (!empty($map['tableMappingList'])) {
                $model->tableMappingList = [];
                $n1 = 0;
                foreach ($map['tableMappingList'] as $item1) {
                    $model->tableMappingList[$n1] = tableMappingList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
