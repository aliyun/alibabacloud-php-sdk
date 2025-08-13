<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class DescribeNameListVariablePageListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameListType;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'lang' => 'Lang',
        'currentPage' => 'currentPage',
        'name' => 'name',
        'nameListType' => 'nameListType',
        'pageSize' => 'pageSize',
        'regId' => 'regId',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nameListType) {
            $res['nameListType'] = $this->nameListType;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nameListType'])) {
            $model->nameListType = $map['nameListType'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
