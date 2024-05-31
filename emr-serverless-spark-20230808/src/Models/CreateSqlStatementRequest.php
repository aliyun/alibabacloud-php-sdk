<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class CreateSqlStatementRequest extends Model
{
    /**
     * @example SHOW TABLES
     *
     * @var string
     */
    public $codeContent;

    /**
     * @example default_catalog
     *
     * @var string
     */
    public $defaultCatalog;

    /**
     * @example default
     *
     * @var string
     */
    public $defaultDatabase;

    /**
     * @example 1000
     *
     * @var int
     */
    public $limit;

    /**
     * @example sc-dfahdfjafhajd****
     *
     * @var string
     */
    public $sqlComputeId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'codeContent'     => 'codeContent',
        'defaultCatalog'  => 'defaultCatalog',
        'defaultDatabase' => 'defaultDatabase',
        'limit'           => 'limit',
        'sqlComputeId'    => 'sqlComputeId',
        'regionId'        => 'regionId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSqlStatementRequest
     */
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
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
