<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class ListApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $appVersions;

    /**
     * @var string
     */
    public $clusterNames;

    /**
     * @var string
     */
    public $level;

    /**
     * @var string
     */
    public $maxDate;

    /**
     * @var string
     */
    public $minDate;

    /**
     * @var string
     */
    public $outAppInfoParams;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appVersions' => 'AppVersions',
        'clusterNames' => 'ClusterNames',
        'level' => 'Level',
        'maxDate' => 'MaxDate',
        'minDate' => 'MinDate',
        'outAppInfoParams' => 'OutAppInfoParams',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appVersions) {
            $res['AppVersions'] = $this->appVersions;
        }

        if (null !== $this->clusterNames) {
            $res['ClusterNames'] = $this->clusterNames;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->maxDate) {
            $res['MaxDate'] = $this->maxDate;
        }

        if (null !== $this->minDate) {
            $res['MinDate'] = $this->minDate;
        }

        if (null !== $this->outAppInfoParams) {
            $res['OutAppInfoParams'] = $this->outAppInfoParams;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['AppVersions'])) {
            $model->appVersions = $map['AppVersions'];
        }

        if (isset($map['ClusterNames'])) {
            $model->clusterNames = $map['ClusterNames'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['MaxDate'])) {
            $model->maxDate = $map['MaxDate'];
        }

        if (isset($map['MinDate'])) {
            $model->minDate = $map['MinDate'];
        }

        if (isset($map['OutAppInfoParams'])) {
            $model->outAppInfoParams = $map['OutAppInfoParams'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
