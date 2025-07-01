<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\CreateDataFlowRequest\autoRefreshs;

class CreateDataFlowRequest extends Model
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
    public $description;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $fileSystemPath;

    /**
     * @var string
     */
    public $fsetId;

    /**
     * @var string
     */
    public $sourceSecurityType;

    /**
     * @var string
     */
    public $sourceStorage;

    /**
     * @var string
     */
    public $sourceStoragePath;

    /**
     * @var int
     */
    public $throughput;
    protected $_name = [
        'autoRefreshInterval' => 'AutoRefreshInterval',
        'autoRefreshPolicy' => 'AutoRefreshPolicy',
        'autoRefreshs' => 'AutoRefreshs',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'fileSystemId' => 'FileSystemId',
        'fileSystemPath' => 'FileSystemPath',
        'fsetId' => 'FsetId',
        'sourceSecurityType' => 'SourceSecurityType',
        'sourceStorage' => 'SourceStorage',
        'sourceStoragePath' => 'SourceStoragePath',
        'throughput' => 'Throughput',
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->fileSystemPath) {
            $res['FileSystemPath'] = $this->fileSystemPath;
        }

        if (null !== $this->fsetId) {
            $res['FsetId'] = $this->fsetId;
        }

        if (null !== $this->sourceSecurityType) {
            $res['SourceSecurityType'] = $this->sourceSecurityType;
        }

        if (null !== $this->sourceStorage) {
            $res['SourceStorage'] = $this->sourceStorage;
        }

        if (null !== $this->sourceStoragePath) {
            $res['SourceStoragePath'] = $this->sourceStoragePath;
        }

        if (null !== $this->throughput) {
            $res['Throughput'] = $this->throughput;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['FileSystemPath'])) {
            $model->fileSystemPath = $map['FileSystemPath'];
        }

        if (isset($map['FsetId'])) {
            $model->fsetId = $map['FsetId'];
        }

        if (isset($map['SourceSecurityType'])) {
            $model->sourceSecurityType = $map['SourceSecurityType'];
        }

        if (isset($map['SourceStorage'])) {
            $model->sourceStorage = $map['SourceStorage'];
        }

        if (isset($map['SourceStoragePath'])) {
            $model->sourceStoragePath = $map['SourceStoragePath'];
        }

        if (isset($map['Throughput'])) {
            $model->throughput = $map['Throughput'];
        }

        return $model;
    }
}
