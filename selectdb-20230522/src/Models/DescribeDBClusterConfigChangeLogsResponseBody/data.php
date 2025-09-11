<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigChangeLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigChangeLogsResponseBody\data\paramChangeLogs;

class data extends Model
{
    /**
     * @var string
     */
    public $dbClusterId;

    /**
     * @var string
     */
    public $dbInstanceId;

    /**
     * @var string
     */
    public $dbInstanceName;

    /**
     * @var paramChangeLogs[]
     */
    public $paramChangeLogs;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'dbClusterId' => 'DbClusterId',
        'dbInstanceId' => 'DbInstanceId',
        'dbInstanceName' => 'DbInstanceName',
        'paramChangeLogs' => 'ParamChangeLogs',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->paramChangeLogs)) {
            Model::validateArray($this->paramChangeLogs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbClusterId) {
            $res['DbClusterId'] = $this->dbClusterId;
        }

        if (null !== $this->dbInstanceId) {
            $res['DbInstanceId'] = $this->dbInstanceId;
        }

        if (null !== $this->dbInstanceName) {
            $res['DbInstanceName'] = $this->dbInstanceName;
        }

        if (null !== $this->paramChangeLogs) {
            if (\is_array($this->paramChangeLogs)) {
                $res['ParamChangeLogs'] = [];
                $n1 = 0;
                foreach ($this->paramChangeLogs as $item1) {
                    $res['ParamChangeLogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['DbClusterId'])) {
            $model->dbClusterId = $map['DbClusterId'];
        }

        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }

        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }

        if (isset($map['ParamChangeLogs'])) {
            if (!empty($map['ParamChangeLogs'])) {
                $model->paramChangeLogs = [];
                $n1 = 0;
                foreach ($map['ParamChangeLogs'] as $item1) {
                    $model->paramChangeLogs[$n1] = paramChangeLogs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
