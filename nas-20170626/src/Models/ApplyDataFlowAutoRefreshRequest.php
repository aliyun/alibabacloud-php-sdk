<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\ApplyDataFlowAutoRefreshRequest\autoRefreshs;

class ApplyDataFlowAutoRefreshRequest extends Model
{
    /**
     * @var int
     */
    public $autoRefreshInterval;

    /**
     * @var string
     */
    public $autoRefreshPolicy;

    /**
     * @var autoRefreshs[]
     */
    public $autoRefreshs;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dataFlowId;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $fileSystemId;
    protected $_name = [
        'autoRefreshInterval' => 'AutoRefreshInterval',
        'autoRefreshPolicy' => 'AutoRefreshPolicy',
        'autoRefreshs' => 'AutoRefreshs',
        'clientToken' => 'ClientToken',
        'dataFlowId' => 'DataFlowId',
        'dryRun' => 'DryRun',
        'fileSystemId' => 'FileSystemId',
    ];

    public function validate()
    {
        if (\is_array($this->autoRefreshs)) {
            Model::validateArray($this->autoRefreshs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRefreshInterval) {
            $res['AutoRefreshInterval'] = $this->autoRefreshInterval;
        }

        if (null !== $this->autoRefreshPolicy) {
            $res['AutoRefreshPolicy'] = $this->autoRefreshPolicy;
        }

        if (null !== $this->autoRefreshs) {
            if (\is_array($this->autoRefreshs)) {
                $res['AutoRefreshs'] = [];
                $n1 = 0;
                foreach ($this->autoRefreshs as $item1) {
                    $res['AutoRefreshs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dataFlowId) {
            $res['DataFlowId'] = $this->dataFlowId;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
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
        if (isset($map['AutoRefreshInterval'])) {
            $model->autoRefreshInterval = $map['AutoRefreshInterval'];
        }

        if (isset($map['AutoRefreshPolicy'])) {
            $model->autoRefreshPolicy = $map['AutoRefreshPolicy'];
        }

        if (isset($map['AutoRefreshs'])) {
            if (!empty($map['AutoRefreshs'])) {
                $model->autoRefreshs = [];
                $n1 = 0;
                foreach ($map['AutoRefreshs'] as $item1) {
                    $model->autoRefreshs[$n1] = autoRefreshs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DataFlowId'])) {
            $model->dataFlowId = $map['DataFlowId'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        return $model;
    }
}
