<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeVaultsResponseBody\vaults\vault;

use AlibabaCloud\Dara\Model;

class backupPlanStatistics extends Model
{
    /**
     * @var int
     */
    public $archive;

    /**
     * @var int
     */
    public $commonFileSystem;

    /**
     * @var int
     */
    public $commonNas;

    /**
     * @var int
     */
    public $csg;

    /**
     * @var int
     */
    public $ecsFile;

    /**
     * @var int
     */
    public $ecsHana;

    /**
     * @var int
     */
    public $isilon;

    /**
     * @var int
     */
    public $localFile;

    /**
     * @var int
     */
    public $localVm;

    /**
     * @var int
     */
    public $mySql;

    /**
     * @var int
     */
    public $nas;

    /**
     * @var int
     */
    public $oracle;

    /**
     * @var int
     */
    public $oss;

    /**
     * @var int
     */
    public $ots;

    /**
     * @var int
     */
    public $sqlServer;
    protected $_name = [
        'archive' => 'Archive',
        'commonFileSystem' => 'CommonFileSystem',
        'commonNas' => 'CommonNas',
        'csg' => 'Csg',
        'ecsFile' => 'EcsFile',
        'ecsHana' => 'EcsHana',
        'isilon' => 'Isilon',
        'localFile' => 'LocalFile',
        'localVm' => 'LocalVm',
        'mySql' => 'MySql',
        'nas' => 'Nas',
        'oracle' => 'Oracle',
        'oss' => 'Oss',
        'ots' => 'Ots',
        'sqlServer' => 'SqlServer',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archive) {
            $res['Archive'] = $this->archive;
        }

        if (null !== $this->commonFileSystem) {
            $res['CommonFileSystem'] = $this->commonFileSystem;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Archive'])) {
            $model->archive = $map['Archive'];
        }

        if (isset($map['CommonFileSystem'])) {
            $model->commonFileSystem = $map['CommonFileSystem'];
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
