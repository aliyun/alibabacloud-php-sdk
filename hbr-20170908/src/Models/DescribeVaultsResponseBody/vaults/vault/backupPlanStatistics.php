<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault;

use AlibabaCloud\Tea\Model;

class backupPlanStatistics extends Model
{
    /**
     * @description The number of archive plans.
     *
     * @example 1
     *
     * @var int
     */
    public $archive;

    /**
     * @description The number of backup plans for General-purpose NAS file systems.
     *
     * @example 1
     *
     * @var int
     */
    public $commonNas;

    /**
     * @description The number of backup plans for Cloud Storage Gateway (CSG) gateways.
     *
     * @example 1
     *
     * @var int
     */
    public $csg;

    /**
     * @description The number of backup plans for ECS files.
     *
     * @example 1
     *
     * @var int
     */
    public $ecsFile;

    /**
     * @description The number of backup plans for SAP HANA instances.
     *
     * @example 1
     *
     * @var int
     */
    public $ecsHana;

    /**
     * @description The number of backup plans for Isilon storage systems.
     *
     * @example 1
     *
     * @var int
     */
    public $isilon;

    /**
     * @description The number of backup plans for on-premises servers.
     *
     * @example 1
     *
     * @var int
     */
    public $localFile;

    /**
     * @description The number of backup plans for on-premises virtual machines (VMs).
     *
     * @example 1
     *
     * @var int
     */
    public $localVm;

    /**
     * @description The number of backup plans for MySQL databases.
     *
     * @example 1
     *
     * @var int
     */
    public $mySql;

    /**
     * @description The number of backup plans for NAS file systems.
     *
     * @example 1
     *
     * @var int
     */
    public $nas;

    /**
     * @description The number of backup plans for Oracle databases.
     *
     * @example 1
     *
     * @var int
     */
    public $oracle;

    /**
     * @description The number of backup plans for OSS buckets.
     *
     * @example 1
     *
     * @var int
     */
    public $oss;

    /**
     * @description The number of backup plans for Tablestore instances.
     *
     * @example 1
     *
     * @var int
     */
    public $ots;

    /**
     * @description The number of backup plans for SQL Server databases.
     *
     * @example 1
     *
     * @var int
     */
    public $sqlServer;
    protected $_name = [
        'archive'   => 'Archive',
        'commonNas' => 'CommonNas',
        'csg'       => 'Csg',
        'ecsFile'   => 'EcsFile',
        'ecsHana'   => 'EcsHana',
        'isilon'    => 'Isilon',
        'localFile' => 'LocalFile',
        'localVm'   => 'LocalVm',
        'mySql'     => 'MySql',
        'nas'       => 'Nas',
        'oracle'    => 'Oracle',
        'oss'       => 'Oss',
        'ots'       => 'Ots',
        'sqlServer' => 'SqlServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archive) {
            $res['Archive'] = $this->archive;
        }
        if (null !== $this->commonNas) {
            $res['CommonNas'] = $this->commonNas;
        }
        if (null !== $this->csg) {
            $res['Csg'] = $this->csg;
        }
        if (null !== $this->ecsFile) {
            $res['EcsFile'] = $this->ecsFile;
        }
        if (null !== $this->ecsHana) {
            $res['EcsHana'] = $this->ecsHana;
        }
        if (null !== $this->isilon) {
            $res['Isilon'] = $this->isilon;
        }
        if (null !== $this->localFile) {
            $res['LocalFile'] = $this->localFile;
        }
        if (null !== $this->localVm) {
            $res['LocalVm'] = $this->localVm;
        }
        if (null !== $this->mySql) {
            $res['MySql'] = $this->mySql;
        }
        if (null !== $this->nas) {
            $res['Nas'] = $this->nas;
        }
        if (null !== $this->oracle) {
            $res['Oracle'] = $this->oracle;
        }
        if (null !== $this->oss) {
            $res['Oss'] = $this->oss;
        }
        if (null !== $this->ots) {
            $res['Ots'] = $this->ots;
        }
        if (null !== $this->sqlServer) {
            $res['SqlServer'] = $this->sqlServer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backupPlanStatistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Archive'])) {
            $model->archive = $map['Archive'];
        }
        if (isset($map['CommonNas'])) {
            $model->commonNas = $map['CommonNas'];
        }
        if (isset($map['Csg'])) {
            $model->csg = $map['Csg'];
        }
        if (isset($map['EcsFile'])) {
            $model->ecsFile = $map['EcsFile'];
        }
        if (isset($map['EcsHana'])) {
            $model->ecsHana = $map['EcsHana'];
        }
        if (isset($map['Isilon'])) {
            $model->isilon = $map['Isilon'];
        }
        if (isset($map['LocalFile'])) {
            $model->localFile = $map['LocalFile'];
        }
        if (isset($map['LocalVm'])) {
            $model->localVm = $map['LocalVm'];
        }
        if (isset($map['MySql'])) {
            $model->mySql = $map['MySql'];
        }
        if (isset($map['Nas'])) {
            $model->nas = $map['Nas'];
        }
        if (isset($map['Oracle'])) {
            $model->oracle = $map['Oracle'];
        }
        if (isset($map['Oss'])) {
            $model->oss = $map['Oss'];
        }
        if (isset($map['Ots'])) {
            $model->ots = $map['Ots'];
        }
        if (isset($map['SqlServer'])) {
            $model->sqlServer = $map['SqlServer'];
        }

        return $model;
    }
}
