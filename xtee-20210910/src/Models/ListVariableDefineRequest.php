<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Dara\Model;

class ListVariableDefineRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $allowBind;

    /**
     * @var string
     */
    public $chargingMode;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $paging;

    /**
     * @var string
     */
    public $queryContent;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $roleType;

    /**
     * @var string
     */
    public $scenesStr;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $typesStr;
    protected $_name = [
        'lang' => 'Lang',
        'allowBind' => 'allowBind',
        'chargingMode' => 'chargingMode',
        'currentPage' => 'currentPage',
        'pageSize' => 'pageSize',
        'paging' => 'paging',
        'queryContent' => 'queryContent',
        'regId' => 'regId',
        'roleType' => 'roleType',
        'scenesStr' => 'scenesStr',
        'source' => 'source',
        'status' => 'status',
        'title' => 'title',
        'typesStr' => 'typesStr',
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

        if (null !== $this->allowBind) {
            $res['allowBind'] = $this->allowBind;
        }

        if (null !== $this->chargingMode) {
            $res['chargingMode'] = $this->chargingMode;
        }

        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->paging) {
            $res['paging'] = $this->paging;
        }

        if (null !== $this->queryContent) {
            $res['queryContent'] = $this->queryContent;
        }

        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        if (null !== $this->roleType) {
            $res['roleType'] = $this->roleType;
        }

        if (null !== $this->scenesStr) {
            $res['scenesStr'] = $this->scenesStr;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->typesStr) {
            $res['typesStr'] = $this->typesStr;
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

        if (isset($map['allowBind'])) {
            $model->allowBind = $map['allowBind'];
        }

        if (isset($map['chargingMode'])) {
            $model->chargingMode = $map['chargingMode'];
        }

        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['paging'])) {
            $model->paging = $map['paging'];
        }

        if (isset($map['queryContent'])) {
            $model->queryContent = $map['queryContent'];
        }

        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        if (isset($map['roleType'])) {
            $model->roleType = $map['roleType'];
        }

        if (isset($map['scenesStr'])) {
            $model->scenesStr = $map['scenesStr'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['typesStr'])) {
            $model->typesStr = $map['typesStr'];
        }

        return $model;
    }
}
