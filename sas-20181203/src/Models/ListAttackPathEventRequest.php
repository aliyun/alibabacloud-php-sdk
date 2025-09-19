<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListAttackPathEventRequest\attackPathAssetList;

class ListAttackPathEventRequest extends Model
{
    /**
     * @var attackPathAssetList[]
     */
    public $attackPathAssetList;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pathNameDesc;

    /**
     * @var string
     */
    public $pathType;

    /**
     * @var string[]
     */
    public $riskLevelList;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'attackPathAssetList' => 'AttackPathAssetList',
        'currentPage' => 'CurrentPage',
        'endTime' => 'EndTime',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'pathNameDesc' => 'PathNameDesc',
        'pathType' => 'PathType',
        'riskLevelList' => 'RiskLevelList',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        if (\is_array($this->attackPathAssetList)) {
            Model::validateArray($this->attackPathAssetList);
        }
        if (\is_array($this->riskLevelList)) {
            Model::validateArray($this->riskLevelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackPathAssetList) {
            if (\is_array($this->attackPathAssetList)) {
                $res['AttackPathAssetList'] = [];
                $n1 = 0;
                foreach ($this->attackPathAssetList as $item1) {
                    $res['AttackPathAssetList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->pathNameDesc) {
            $res['PathNameDesc'] = $this->pathNameDesc;
        }

        if (null !== $this->pathType) {
            $res['PathType'] = $this->pathType;
        }

        if (null !== $this->riskLevelList) {
            if (\is_array($this->riskLevelList)) {
                $res['RiskLevelList'] = [];
                $n1 = 0;
                foreach ($this->riskLevelList as $item1) {
                    $res['RiskLevelList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AttackPathAssetList'])) {
            if (!empty($map['AttackPathAssetList'])) {
                $model->attackPathAssetList = [];
                $n1 = 0;
                foreach ($map['AttackPathAssetList'] as $item1) {
                    $model->attackPathAssetList[$n1] = attackPathAssetList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PathNameDesc'])) {
            $model->pathNameDesc = $map['PathNameDesc'];
        }

        if (isset($map['PathType'])) {
            $model->pathType = $map['PathType'];
        }

        if (isset($map['RiskLevelList'])) {
            if (!empty($map['RiskLevelList'])) {
                $model->riskLevelList = [];
                $n1 = 0;
                foreach ($map['RiskLevelList'] as $item1) {
                    $model->riskLevelList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
