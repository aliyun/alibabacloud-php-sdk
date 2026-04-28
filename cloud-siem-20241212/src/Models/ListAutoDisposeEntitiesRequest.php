<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models;

use AlibabaCloud\Dara\Model;

class ListAutoDisposeEntitiesRequest extends Model
{
    /**
     * @var string[]
     */
    public $autoDisposeRecordIds;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'autoDisposeRecordIds' => 'AutoDisposeRecordIds',
        'currentPage' => 'CurrentPage',
        'dataSourceType' => 'DataSourceType',
        'lang' => 'Lang',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'pageSize' => 'PageSize',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->autoDisposeRecordIds)) {
            Model::validateArray($this->autoDisposeRecordIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoDisposeRecordIds) {
            if (\is_array($this->autoDisposeRecordIds)) {
                $res['AutoDisposeRecordIds'] = [];
                $n1 = 0;
                foreach ($this->autoDisposeRecordIds as $item1) {
                    $res['AutoDisposeRecordIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AutoDisposeRecordIds'])) {
            if (!empty($map['AutoDisposeRecordIds'])) {
                $model->autoDisposeRecordIds = [];
                $n1 = 0;
                foreach ($map['AutoDisposeRecordIds'] as $item1) {
                    $model->autoDisposeRecordIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
