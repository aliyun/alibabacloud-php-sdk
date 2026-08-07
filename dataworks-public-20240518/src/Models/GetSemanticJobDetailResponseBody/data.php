<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetSemanticJobDetailResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $advanceSettings;

    /**
     * @var string
     */
    public $codeParameters;

    /**
     * @var int
     */
    public $currentSqlIndex;

    /**
     * @var string
     */
    public $customerName;

    /**
     * @var string
     */
    public $datasource;

    /**
     * @var string
     */
    public $env;

    /**
     * @var int[]
     */
    public $execTypes;

    /**
     * @var string
     */
    public $executorJobId;

    /**
     * @var int
     */
    public $fileType;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var mixed[][]
     */
    public $resourceUrls;

    /**
     * @var int[]
     */
    public $statuses;
    protected $_name = [
        'advanceSettings' => 'AdvanceSettings',
        'codeParameters' => 'CodeParameters',
        'currentSqlIndex' => 'CurrentSqlIndex',
        'customerName' => 'CustomerName',
        'datasource' => 'Datasource',
        'env' => 'Env',
        'execTypes' => 'ExecTypes',
        'executorJobId' => 'ExecutorJobId',
        'fileType' => 'FileType',
        'projectId' => 'ProjectId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceUrls' => 'ResourceUrls',
        'statuses' => 'Statuses',
    ];

    public function validate()
    {
        if (\is_array($this->advanceSettings)) {
            Model::validateArray($this->advanceSettings);
        }
        if (\is_array($this->execTypes)) {
            Model::validateArray($this->execTypes);
        }
        if (\is_array($this->resourceUrls)) {
            Model::validateArray($this->resourceUrls);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advanceSettings) {
            if (\is_array($this->advanceSettings)) {
                $res['AdvanceSettings'] = [];
                foreach ($this->advanceSettings as $key1 => $value1) {
                    $res['AdvanceSettings'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->codeParameters) {
            $res['CodeParameters'] = $this->codeParameters;
        }

        if (null !== $this->currentSqlIndex) {
            $res['CurrentSqlIndex'] = $this->currentSqlIndex;
        }

        if (null !== $this->customerName) {
            $res['CustomerName'] = $this->customerName;
        }

        if (null !== $this->datasource) {
            $res['Datasource'] = $this->datasource;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->execTypes) {
            if (\is_array($this->execTypes)) {
                $res['ExecTypes'] = [];
                $n1 = 0;
                foreach ($this->execTypes as $item1) {
                    $res['ExecTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->executorJobId) {
            $res['ExecutorJobId'] = $this->executorJobId;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceUrls) {
            if (\is_array($this->resourceUrls)) {
                $res['ResourceUrls'] = [];
                $n1 = 0;
                foreach ($this->resourceUrls as $item1) {
                    if (\is_array($item1)) {
                        $res['ResourceUrls'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['ResourceUrls'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['Statuses'] = [];
                $n1 = 0;
                foreach ($this->statuses as $item1) {
                    $res['Statuses'][$n1] = $item1;
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
        if (isset($map['AdvanceSettings'])) {
            if (!empty($map['AdvanceSettings'])) {
                $model->advanceSettings = [];
                foreach ($map['AdvanceSettings'] as $key1 => $value1) {
                    $model->advanceSettings[$key1] = $value1;
                }
            }
        }

        if (isset($map['CodeParameters'])) {
            $model->codeParameters = $map['CodeParameters'];
        }

        if (isset($map['CurrentSqlIndex'])) {
            $model->currentSqlIndex = $map['CurrentSqlIndex'];
        }

        if (isset($map['CustomerName'])) {
            $model->customerName = $map['CustomerName'];
        }

        if (isset($map['Datasource'])) {
            $model->datasource = $map['Datasource'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['ExecTypes'])) {
            if (!empty($map['ExecTypes'])) {
                $model->execTypes = [];
                $n1 = 0;
                foreach ($map['ExecTypes'] as $item1) {
                    $model->execTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExecutorJobId'])) {
            $model->executorJobId = $map['ExecutorJobId'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceUrls'])) {
            if (!empty($map['ResourceUrls'])) {
                $model->resourceUrls = [];
                $n1 = 0;
                foreach ($map['ResourceUrls'] as $item1) {
                    if (!empty($item1)) {
                        $model->resourceUrls[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->resourceUrls[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = [];
                $n1 = 0;
                foreach ($map['Statuses'] as $item1) {
                    $model->statuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
