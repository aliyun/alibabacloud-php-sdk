<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class DescribeVariableMarketListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

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
    public $scenesStr;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'lang'         => 'Lang',
        'chargingMode' => 'chargingMode',
        'currentPage'  => 'currentPage',
        'pageSize'     => 'pageSize',
        'paging'       => 'paging',
        'queryContent' => 'queryContent',
        'regId'        => 'regId',
        'scenesStr'    => 'scenesStr',
        'source'       => 'source',
        'title'        => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (null !== $this->scenesStr) {
            $res['scenesStr'] = $this->scenesStr;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVariableMarketListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
        if (isset($map['scenesStr'])) {
            $model->scenesStr = $map['scenesStr'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
