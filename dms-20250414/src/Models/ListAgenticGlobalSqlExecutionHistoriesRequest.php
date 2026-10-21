<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class ListAgenticGlobalSqlExecutionHistoriesRequest extends Model
{
    /**
     * @var string
     */
    public $actorId;

    /**
     * @var string
     */
    public $actorName;

    /**
     * @var string
     */
    public $actorType;

    /**
     * @var string
     */
    public $catalogUuid;

    /**
     * @var string
     */
    public $databaseUuid;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $scenario;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $sqlKeyword;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'actorId' => 'ActorId',
        'actorName' => 'ActorName',
        'actorType' => 'ActorType',
        'catalogUuid' => 'CatalogUuid',
        'databaseUuid' => 'DatabaseUuid',
        'endTime' => 'EndTime',
        'page' => 'Page',
        'scenario' => 'Scenario',
        'size' => 'Size',
        'sqlKeyword' => 'SqlKeyword',
        'sqlType' => 'SqlType',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actorId) {
            $res['ActorId'] = $this->actorId;
        }

        if (null !== $this->actorName) {
            $res['ActorName'] = $this->actorName;
        }

        if (null !== $this->actorType) {
            $res['ActorType'] = $this->actorType;
        }

        if (null !== $this->catalogUuid) {
            $res['CatalogUuid'] = $this->catalogUuid;
        }

        if (null !== $this->databaseUuid) {
            $res['DatabaseUuid'] = $this->databaseUuid;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->scenario) {
            $res['Scenario'] = $this->scenario;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->sqlKeyword) {
            $res['SqlKeyword'] = $this->sqlKeyword;
        }

        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['ActorId'])) {
            $model->actorId = $map['ActorId'];
        }

        if (isset($map['ActorName'])) {
            $model->actorName = $map['ActorName'];
        }

        if (isset($map['ActorType'])) {
            $model->actorType = $map['ActorType'];
        }

        if (isset($map['CatalogUuid'])) {
            $model->catalogUuid = $map['CatalogUuid'];
        }

        if (isset($map['DatabaseUuid'])) {
            $model->databaseUuid = $map['DatabaseUuid'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['Scenario'])) {
            $model->scenario = $map['Scenario'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['SqlKeyword'])) {
            $model->sqlKeyword = $map['SqlKeyword'];
        }

        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
