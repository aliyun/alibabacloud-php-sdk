<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePolicyLogsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePolicyLogsResponseBody\lifecyclePolicyLogs\retrieveRules;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeLifecyclePolicyLogsResponseBody\lifecyclePolicyLogs\transitRules;

class lifecyclePolicyLogs extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $paths;

    /**
     * @var retrieveRules[]
     */
    public $retrieveRules;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageType;

    /**
     * @var string
     */
    public $summary;

    /**
     * @var transitRules[]
     */
    public $transitRules;
    protected $_name = [
        'createTime' => 'CreateTime',
        'paths' => 'Paths',
        'retrieveRules' => 'RetrieveRules',
        'status' => 'Status',
        'storageType' => 'StorageType',
        'summary' => 'Summary',
        'transitRules' => 'TransitRules',
    ];

    public function validate()
    {
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        if (\is_array($this->retrieveRules)) {
            Model::validateArray($this->retrieveRules);
        }
        if (\is_array($this->transitRules)) {
            Model::validateArray($this->transitRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['Paths'] = [];
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['Paths'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->retrieveRules) {
            if (\is_array($this->retrieveRules)) {
                $res['RetrieveRules'] = [];
                $n1 = 0;
                foreach ($this->retrieveRules as $item1) {
                    $res['RetrieveRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->transitRules) {
            if (\is_array($this->transitRules)) {
                $res['TransitRules'] = [];
                $n1 = 0;
                foreach ($this->transitRules as $item1) {
                    $res['TransitRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = [];
                $n1 = 0;
                foreach ($map['Paths'] as $item1) {
                    $model->paths[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RetrieveRules'])) {
            if (!empty($map['RetrieveRules'])) {
                $model->retrieveRules = [];
                $n1 = 0;
                foreach ($map['RetrieveRules'] as $item1) {
                    $model->retrieveRules[$n1] = retrieveRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['TransitRules'])) {
            if (!empty($map['TransitRules'])) {
                $model->transitRules = [];
                $n1 = 0;
                foreach ($map['TransitRules'] as $item1) {
                    $model->transitRules[$n1] = transitRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
