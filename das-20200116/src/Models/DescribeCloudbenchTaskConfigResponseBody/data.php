<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudbenchTaskConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $archiveFolder;

    /**
     * @var string
     */
    public $benchCmd;

    /**
     * @var string
     */
    public $clientJarPath;

    /**
     * @var string
     */
    public $jarOnOss;

    /**
     * @var string
     */
    public $loadCmd;

    /**
     * @var string
     */
    public $metaFileName;

    /**
     * @var string
     */
    public $metaFileOnOss;

    /**
     * @var string
     */
    public $metaFilePath;

    /**
     * @var string
     */
    public $parseCmd;

    /**
     * @var string
     */
    public $parseFilePath;

    /**
     * @var string
     */
    public $rocksDbPath;

    /**
     * @var string
     */
    public $sqlFileName;

    /**
     * @var string
     */
    public $sqlFileOnOss;

    /**
     * @var string
     */
    public $sqlFilePath;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $workDir;
    protected $_name = [
        'archiveFolder' => 'ArchiveFolder',
        'benchCmd' => 'BenchCmd',
        'clientJarPath' => 'ClientJarPath',
        'jarOnOss' => 'JarOnOss',
        'loadCmd' => 'LoadCmd',
        'metaFileName' => 'MetaFileName',
        'metaFileOnOss' => 'MetaFileOnOss',
        'metaFilePath' => 'MetaFilePath',
        'parseCmd' => 'ParseCmd',
        'parseFilePath' => 'ParseFilePath',
        'rocksDbPath' => 'RocksDbPath',
        'sqlFileName' => 'SqlFileName',
        'sqlFileOnOss' => 'SqlFileOnOss',
        'sqlFilePath' => 'SqlFilePath',
        'taskId' => 'TaskId',
        'userId' => 'UserId',
        'workDir' => 'WorkDir',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archiveFolder) {
            $res['ArchiveFolder'] = $this->archiveFolder;
        }

        if (null !== $this->benchCmd) {
            $res['BenchCmd'] = $this->benchCmd;
        }

        if (null !== $this->clientJarPath) {
            $res['ClientJarPath'] = $this->clientJarPath;
        }

        if (null !== $this->jarOnOss) {
            $res['JarOnOss'] = $this->jarOnOss;
        }

        if (null !== $this->loadCmd) {
            $res['LoadCmd'] = $this->loadCmd;
        }

        if (null !== $this->metaFileName) {
            $res['MetaFileName'] = $this->metaFileName;
        }

        if (null !== $this->metaFileOnOss) {
            $res['MetaFileOnOss'] = $this->metaFileOnOss;
        }

        if (null !== $this->metaFilePath) {
            $res['MetaFilePath'] = $this->metaFilePath;
        }

        if (null !== $this->parseCmd) {
            $res['ParseCmd'] = $this->parseCmd;
        }

        if (null !== $this->parseFilePath) {
            $res['ParseFilePath'] = $this->parseFilePath;
        }

        if (null !== $this->rocksDbPath) {
            $res['RocksDbPath'] = $this->rocksDbPath;
        }

        if (null !== $this->sqlFileName) {
            $res['SqlFileName'] = $this->sqlFileName;
        }

        if (null !== $this->sqlFileOnOss) {
            $res['SqlFileOnOss'] = $this->sqlFileOnOss;
        }

        if (null !== $this->sqlFilePath) {
            $res['SqlFilePath'] = $this->sqlFilePath;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->workDir) {
            $res['WorkDir'] = $this->workDir;
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
        if (isset($map['ArchiveFolder'])) {
            $model->archiveFolder = $map['ArchiveFolder'];
        }

        if (isset($map['BenchCmd'])) {
            $model->benchCmd = $map['BenchCmd'];
        }

        if (isset($map['ClientJarPath'])) {
            $model->clientJarPath = $map['ClientJarPath'];
        }

        if (isset($map['JarOnOss'])) {
            $model->jarOnOss = $map['JarOnOss'];
        }

        if (isset($map['LoadCmd'])) {
            $model->loadCmd = $map['LoadCmd'];
        }

        if (isset($map['MetaFileName'])) {
            $model->metaFileName = $map['MetaFileName'];
        }

        if (isset($map['MetaFileOnOss'])) {
            $model->metaFileOnOss = $map['MetaFileOnOss'];
        }

        if (isset($map['MetaFilePath'])) {
            $model->metaFilePath = $map['MetaFilePath'];
        }

        if (isset($map['ParseCmd'])) {
            $model->parseCmd = $map['ParseCmd'];
        }

        if (isset($map['ParseFilePath'])) {
            $model->parseFilePath = $map['ParseFilePath'];
        }

        if (isset($map['RocksDbPath'])) {
            $model->rocksDbPath = $map['RocksDbPath'];
        }

        if (isset($map['SqlFileName'])) {
            $model->sqlFileName = $map['SqlFileName'];
        }

        if (isset($map['SqlFileOnOss'])) {
            $model->sqlFileOnOss = $map['SqlFileOnOss'];
        }

        if (isset($map['SqlFilePath'])) {
            $model->sqlFilePath = $map['SqlFilePath'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['WorkDir'])) {
            $model->workDir = $map['WorkDir'];
        }

        return $model;
    }
}
