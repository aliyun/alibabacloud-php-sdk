<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListCheckItemsRequest extends Model
{
    /**
     * @var int
     */
    public $checkId;

    /**
     * @var string
     */
    public $checkShowName;

    /**
     * @var string[]
     */
    public $checkTypes;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $statuses;
    protected $_name = [
        'checkId' => 'CheckId',
        'checkShowName' => 'CheckShowName',
        'checkTypes' => 'CheckTypes',
        'currentPage' => 'CurrentPage',
        'lang' => 'Lang',
        'pageSize' => 'PageSize',
        'statuses' => 'Statuses',
    ];

    public function validate()
    {
        if (\is_array($this->checkTypes)) {
            Model::validateArray($this->checkTypes);
        }
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkShowName) {
            $res['CheckShowName'] = $this->checkShowName;
        }

        if (null !== $this->checkTypes) {
            if (\is_array($this->checkTypes)) {
                $res['CheckTypes'] = [];
                $n1 = 0;
                foreach ($this->checkTypes as $item1) {
                    $res['CheckTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['Statuses'] = [];
                $n1 = 0;
                foreach ($this->statuses as $item1) {
                    $res['Statuses'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckShowName'])) {
            $model->checkShowName = $map['CheckShowName'];
        }

        if (isset($map['CheckTypes'])) {
            if (!empty($map['CheckTypes'])) {
                $model->checkTypes = [];
                $n1 = 0;
                foreach ($map['CheckTypes'] as $item1) {
                    $model->checkTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Statuses'])) {
            if (!empty($map['Statuses'])) {
                $model->statuses = [];
                $n1 = 0;
                foreach ($map['Statuses'] as $item1) {
                    $model->statuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
