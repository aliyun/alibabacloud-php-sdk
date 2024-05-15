<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\DescribeCloudbenchTaskConfigResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The path in which the files are archived.
     *
     * @example /tmp/das/cloudbench/archive-sqls/
     *
     * @var string
     */
    public $archiveFolder;

    /**
     * @description The command that was run to start the stress testing task.
     *
     * @example java -jar /tmp/das/cloudbench/CloudBenchClient.jar --bench --rocksdb /tmp/das/cloudbench/rocksdb --meta /tmp/das/cloudbench/cl-1621353601000-360****.meta --task_name 2777bba9-a836-49e6-9f70-1c3822fc9239 --result_file /tmp/das/cloudbench/null.result --user cloudb**** --pwd \\"cloudbench@****\\" --host rm-bp1j5f8s5x26kq79216****.mysql.rds.aliyuncs.com --port 3306 --charset utf8mb4 --interval 1 --bench_time 3600 --rate_factor 1.0 --start_time 1621353601 --rt > /tmp/das/cloudbench/null.log
     *
     * @var string
     */
    public $benchCmd;

    /**
     * @description The path to the JAR file that is used for stress testing.
     *
     * @example /tmp/das/cloudbench/CloudBenchClient.jar
     *
     * @var string
     */
    public $clientJarPath;

    /**
     * @description The path to the JAR file that is stored in OSS. The JAR file is used for stress testing.
     *
     * @example https://cloudbench-cn-hangzhou.oss-cn-hangzhou.aliyuncs.com/CloudBenchClient.jar?OSSAccessKeyId=LTAI5tKj8B4wikkVtupK****&Expires=1622441372&Signature=28p%2BCe4tNHpr9VPOcHc3Si9iOb****
     *
     * @var string
     */
    public $jarOnOss;

    /**
     * @description The command that was run to preload the file that stores the analysis result of full SQL statistics.
     *
     * @example java -jar /tmp/das/cloudbench/CloudBenchClient.jar --load --out /tmp/das/cloudbench/cl-1621353601000-360****.sc --meta /tmp/das/cloudbench/cl-1621353601000-360****.meta --task_name 2777bba9-****-49e6-9f70-1c3822fc**** --rocksdb /tmp/das/cloudbench/rocksdb
     *
     * @var string
     */
    public $loadCmd;

    /**
     * @description The name of the metadata file.
     *
     * @example cl-1621353601000-360****.meta
     *
     * @var string
     */
    public $metaFileName;

    /**
     * @description The name of the metadata file stored in Object Storage Service (OSS).
     *
     * @example "https://cb-rm-bp1w9g06h560l****.oss-cn-hangzhou.aliyuncs.com/cl-1621353601000-360****.meta?OSSAccessKeyId=LTAI5tKj8B4wikkVtupK****&Expires=1622441372&Signature=Qsehg3tzeA57M%2BIixAbWPWAtvl****
     *
     * @var string
     */
    public $metaFileOnOss;

    /**
     * @description The path to the metadata file.
     *
     * @example /tmp/das/cloudbench/cl-1621353601000-360****.meta
     *
     * @var string
     */
    public $metaFilePath;

    /**
     * @description The command that was run to parse the file that stores the analysis result of full SQL statistics.
     *
     * @example cd /tmp/das/cloudbench && java -jar CloudBenchClient.jar --parse --threads 32 --file /tmp/das/cloudbench/2777bba9-a836-49e6-9f70-1c3822fc9239.archiveSql --meta /tmp/das/cloudbench/cl-1621353601000-360****.meta --out /tmp/das/cloudbench/cl-1621353601000-360****.sc --parent_patmp/das/cloudbench --source RDS --h /thost rm-bp1j5f8s5x266****.mysql.rds.aliyuncs.com --port 3306 --user cloudb**** --pwd \\"cloudbench@****\\" --cutSqlLen 8192 --db_black_list=information_schema,test,unknow,null
     *
     * @var string
     */
    public $parseCmd;

    /**
     * @description The path to the file that is parsed. The file stores the analysis result of full SQL statistics.
     *
     * @example /tmp/das/cloudbench/2777bba9-a836-49e6-9f70-1c3822fc****.archiveSql
     *
     * @var string
     */
    public $parseFilePath;

    /**
     * @description The location where the RocksDB storage system is deployed in the stress testing client.
     *
     * @example /tmp/das/cloudbench/rocksdb
     *
     * @var string
     */
    public $rocksDbPath;

    /**
     * @description The name of the file that stores the analysis result of full SQL statistics.
     *
     * @example cl-1621353601000-360****.sc
     *
     * @var string
     */
    public $sqlFileName;

    /**
     * @description The name of the file that stores the analysis result of full SQL statistics and that is stored in OSS.
     *
     * @example https://cb-rm-bp1w9g06h560l****.oss-cn-hangzhou.aliyuncs.com/cl-1621353601000-360****.sc?OSSAccessKeyId=LTAI5tKj8B4wikkVtupK****&Expires=1622441372&Signature=LYMADwo%2BRrJeqR3e4d8OlIkVmw****
     *
     * @var string
     */
    public $sqlFileOnOss;

    /**
     * @description The path to the file that stores the analysis result of full SQL statistics.
     *
     * @example /tmp/das/cloudbench/cl-1621353601000-360****.sc
     *
     * @var string
     */
    public $sqlFilePath;

    /**
     * @description The task ID.
     *
     * @example e5cec704-0518-430f-8263-76f4dcds****
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The Alibaba Cloud account ID.
     *
     * @example 1091411816252****
     *
     * @var string
     */
    public $userId;

    /**
     * @description The path of the temporary directory that is generated for stress testing.
     *
     * @example /tmp/bench/
     *
     * @var string
     */
    public $workDir;
    protected $_name = [
        'archiveFolder' => 'ArchiveFolder',
        'benchCmd'      => 'BenchCmd',
        'clientJarPath' => 'ClientJarPath',
        'jarOnOss'      => 'JarOnOss',
        'loadCmd'       => 'LoadCmd',
        'metaFileName'  => 'MetaFileName',
        'metaFileOnOss' => 'MetaFileOnOss',
        'metaFilePath'  => 'MetaFilePath',
        'parseCmd'      => 'ParseCmd',
        'parseFilePath' => 'ParseFilePath',
        'rocksDbPath'   => 'RocksDbPath',
        'sqlFileName'   => 'SqlFileName',
        'sqlFileOnOss'  => 'SqlFileOnOss',
        'sqlFilePath'   => 'SqlFilePath',
        'taskId'        => 'TaskId',
        'userId'        => 'UserId',
        'workDir'       => 'WorkDir',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
