<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigResponseBody;

use AlibabaCloud\SDK\Selectdb\V20230522\Models\DescribeDBClusterConfigResponseBody\data\params;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example selectdb-cn-wny3li00g02-be
     *
     * @var string
     */
    public $dbClusterId;

    /**
     * @example 6585
     *
     * @var string
     */
    public $dbInstanceId;

    /**
     * @example selectdb-cn-wny3li00g02
     *
     * @var string
     */
    public $dbInstanceName;

    /**
     * @var params[]
     */
    public $params;

    /**
     * @example 107841167
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'dbClusterId'    => 'DbClusterId',
        'dbInstanceId'   => 'DbInstanceId',
        'dbInstanceName' => 'DbInstanceName',
        'params'         => 'Params',
        'taskId'         => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->params) {
            $res['Params'] = [];
            if (null !== $this->params && \is_array($this->params)) {
                $n = 0;
                foreach ($this->params as $item) {
                    $res['Params'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['DbClusterId'])) {
            $model->dbClusterId = $map['DbClusterId'];
        }
        if (isset($map['DbInstanceId'])) {
            $model->dbInstanceId = $map['DbInstanceId'];
        }
        if (isset($map['DbInstanceName'])) {
            $model->dbInstanceName = $map['DbInstanceName'];
        }
        if (isset($map['Params'])) {
            if (!empty($map['Params'])) {
                $model->params = [];
                $n             = 0;
                foreach ($map['Params'] as $item) {
                    $model->params[$n++] = null !== $item ? params::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
