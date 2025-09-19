<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListAgentlessMaliciousFilesRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $dealed;

    /**
     * @var int
     */
    public $eventId;

    /**
     * @var string
     */
    public $fuzzyMaliciousName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $levels;

    /**
     * @var string
     */
    public $maliciousMd5;

    /**
     * @var string
     */
    public $maliciousType;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string[]
     */
    public $scanRange;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'dealed' => 'Dealed',
        'eventId' => 'EventId',
        'fuzzyMaliciousName' => 'FuzzyMaliciousName',
        'lang' => 'Lang',
        'levels' => 'Levels',
        'maliciousMd5' => 'MaliciousMd5',
        'maliciousType' => 'MaliciousType',
        'pageSize' => 'PageSize',
        'remark' => 'Remark',
        'scanRange' => 'ScanRange',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->scanRange)) {
            Model::validateArray($this->scanRange);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->dealed) {
            $res['Dealed'] = $this->dealed;
        }

        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }

        if (null !== $this->fuzzyMaliciousName) {
            $res['FuzzyMaliciousName'] = $this->fuzzyMaliciousName;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }

        if (null !== $this->maliciousMd5) {
            $res['MaliciousMd5'] = $this->maliciousMd5;
        }

        if (null !== $this->maliciousType) {
            $res['MaliciousType'] = $this->maliciousType;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->scanRange) {
            if (\is_array($this->scanRange)) {
                $res['ScanRange'] = [];
                $n1 = 0;
                foreach ($this->scanRange as $item1) {
                    $res['ScanRange'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Dealed'])) {
            $model->dealed = $map['Dealed'];
        }

        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }

        if (isset($map['FuzzyMaliciousName'])) {
            $model->fuzzyMaliciousName = $map['FuzzyMaliciousName'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }

        if (isset($map['MaliciousMd5'])) {
            $model->maliciousMd5 = $map['MaliciousMd5'];
        }

        if (isset($map['MaliciousType'])) {
            $model->maliciousType = $map['MaliciousType'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['ScanRange'])) {
            if (!empty($map['ScanRange'])) {
                $model->scanRange = [];
                $n1 = 0;
                foreach ($map['ScanRange'] as $item1) {
                    $model->scanRange[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
