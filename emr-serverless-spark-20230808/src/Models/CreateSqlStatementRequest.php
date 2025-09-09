<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class CreateSqlStatementRequest extends Model
{
    /**
     * @var string
     */
    public $codeContent;

    /**
     * @var string
     */
    public $defaultCatalog;

    /**
     * @var string
     */
    public $defaultDatabase;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $sqlComputeId;

    /**
     * @var string
     */
    public $taskBizId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'codeContent' => 'codeContent',
        'defaultCatalog' => 'defaultCatalog',
        'defaultDatabase' => 'defaultDatabase',
        'limit' => 'limit',
        'sqlComputeId' => 'sqlComputeId',
        'taskBizId' => 'taskBizId',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeContent) {
            $res['codeContent'] = $this->codeContent;
        }

        if (null !== $this->defaultCatalog) {
            $res['defaultCatalog'] = $this->defaultCatalog;
        }

        if (null !== $this->defaultDatabase) {
            $res['defaultDatabase'] = $this->defaultDatabase;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->sqlComputeId) {
            $res['sqlComputeId'] = $this->sqlComputeId;
        }

        if (null !== $this->taskBizId) {
            $res['taskBizId'] = $this->taskBizId;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['codeContent'])) {
            $model->codeContent = $map['codeContent'];
        }

        if (isset($map['defaultCatalog'])) {
            $model->defaultCatalog = $map['defaultCatalog'];
        }

        if (isset($map['defaultDatabase'])) {
            $model->defaultDatabase = $map['defaultDatabase'];
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['sqlComputeId'])) {
            $model->sqlComputeId = $map['sqlComputeId'];
        }

        if (isset($map['taskBizId'])) {
            $model->taskBizId = $map['taskBizId'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
