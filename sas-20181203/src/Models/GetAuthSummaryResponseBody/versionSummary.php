<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class versionSummary extends Model
{
    /**
     * @var string
     */
    public $authBindType;
    /**
     * @var int
     */
    public $index;
    /**
     * @var int
     */
    public $totalCoreAuthCount;
    /**
     * @var int
     */
    public $totalCount;
    /**
     * @var int
     */
    public $totalEcsAuthCount;
    /**
     * @var int
     */
    public $unUsedCount;
    /**
     * @var int
     */
    public $unusedCoreAuthCount;
    /**
     * @var int
     */
    public $unusedEcsAuthCount;
    /**
     * @var int
     */
    public $usedCoreCount;
    /**
     * @var int
     */
    public $usedEcsCount;
    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'authBindType'        => 'AuthBindType',
        'index'               => 'Index',
        'totalCoreAuthCount'  => 'TotalCoreAuthCount',
        'totalCount'          => 'TotalCount',
        'totalEcsAuthCount'   => 'TotalEcsAuthCount',
        'unUsedCount'         => 'UnUsedCount',
        'unusedCoreAuthCount' => 'UnusedCoreAuthCount',
        'unusedEcsAuthCount'  => 'UnusedEcsAuthCount',
        'usedCoreCount'       => 'UsedCoreCount',
        'usedEcsCount'        => 'UsedEcsCount',
        'version'             => 'Version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authBindType) {
            $res['AuthBindType'] = $this->authBindType;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->totalCoreAuthCount) {
            $res['TotalCoreAuthCount'] = $this->totalCoreAuthCount;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->totalEcsAuthCount) {
            $res['TotalEcsAuthCount'] = $this->totalEcsAuthCount;
        }

        if (null !== $this->unUsedCount) {
            $res['UnUsedCount'] = $this->unUsedCount;
        }

        if (null !== $this->unusedCoreAuthCount) {
            $res['UnusedCoreAuthCount'] = $this->unusedCoreAuthCount;
        }

        if (null !== $this->unusedEcsAuthCount) {
            $res['UnusedEcsAuthCount'] = $this->unusedEcsAuthCount;
        }

        if (null !== $this->usedCoreCount) {
            $res['UsedCoreCount'] = $this->usedCoreCount;
        }

        if (null !== $this->usedEcsCount) {
            $res['UsedEcsCount'] = $this->usedEcsCount;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AuthBindType'])) {
            $model->authBindType = $map['AuthBindType'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['TotalCoreAuthCount'])) {
            $model->totalCoreAuthCount = $map['TotalCoreAuthCount'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TotalEcsAuthCount'])) {
            $model->totalEcsAuthCount = $map['TotalEcsAuthCount'];
        }

        if (isset($map['UnUsedCount'])) {
            $model->unUsedCount = $map['UnUsedCount'];
        }

        if (isset($map['UnusedCoreAuthCount'])) {
            $model->unusedCoreAuthCount = $map['UnusedCoreAuthCount'];
        }

        if (isset($map['UnusedEcsAuthCount'])) {
            $model->unusedEcsAuthCount = $map['UnusedEcsAuthCount'];
        }

        if (isset($map['UsedCoreCount'])) {
            $model->usedCoreCount = $map['UsedCoreCount'];
        }

        if (isset($map['UsedEcsCount'])) {
            $model->usedEcsCount = $map['UsedEcsCount'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
