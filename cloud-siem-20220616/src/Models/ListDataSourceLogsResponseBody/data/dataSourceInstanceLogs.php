<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceLogsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudsiem\V20220616\Models\ListDataSourceLogsResponseBody\data\dataSourceInstanceLogs\logParams;

class dataSourceInstanceLogs extends Model
{
    /**
     * @var string
     */
    public $logCode;

    /**
     * @var string
     */
    public $logInstanceId;

    /**
     * @var string
     */
    public $logMdsCode;

    /**
     * @var logParams[]
     */
    public $logParams;

    /**
     * @var int
     */
    public $taskStatus;
    protected $_name = [
        'logCode' => 'LogCode',
        'logInstanceId' => 'LogInstanceId',
        'logMdsCode' => 'LogMdsCode',
        'logParams' => 'LogParams',
        'taskStatus' => 'TaskStatus',
    ];

    public function validate()
    {
        if (\is_array($this->logParams)) {
            Model::validateArray($this->logParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logCode) {
            $res['LogCode'] = $this->logCode;
        }

        if (null !== $this->logInstanceId) {
            $res['LogInstanceId'] = $this->logInstanceId;
        }

        if (null !== $this->logMdsCode) {
            $res['LogMdsCode'] = $this->logMdsCode;
        }

        if (null !== $this->logParams) {
            if (\is_array($this->logParams)) {
                $res['LogParams'] = [];
                $n1 = 0;
                foreach ($this->logParams as $item1) {
                    $res['LogParams'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
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
        if (isset($map['LogCode'])) {
            $model->logCode = $map['LogCode'];
        }

        if (isset($map['LogInstanceId'])) {
            $model->logInstanceId = $map['LogInstanceId'];
        }

        if (isset($map['LogMdsCode'])) {
            $model->logMdsCode = $map['LogMdsCode'];
        }

        if (isset($map['LogParams'])) {
            if (!empty($map['LogParams'])) {
                $model->logParams = [];
                $n1 = 0;
                foreach ($map['LogParams'] as $item1) {
                    $model->logParams[$n1] = logParams::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }

        return $model;
    }
}
