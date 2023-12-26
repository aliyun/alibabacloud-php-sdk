<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class PostMSSearchEnhanceShrinkRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $customConfigInfoShrink;

    /**
     * @example 0
     *
     * @var bool
     */
    public $debug;

    /**
     * @var string
     */
    public $fieldsShrink;

    /**
     * @example []
     *
     * @var string
     */
    public $filters;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example []
     *
     * @var string
     */
    public $queries;

    /**
     * @var string
     */
    public $rankModelInfoShrink;

    /**
     * @example 10
     *
     * @var int
     */
    public $rows;

    /**
     * @example 101
     *
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $sortShrink;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uq;
    protected $_name = [
        'body'                   => 'Body',
        'customConfigInfoShrink' => 'CustomConfigInfo',
        'debug'                  => 'Debug',
        'fieldsShrink'           => 'Fields',
        'filters'                => 'Filters',
        'page'                   => 'Page',
        'queries'                => 'Queries',
        'rankModelInfoShrink'    => 'RankModelInfo',
        'rows'                   => 'Rows',
        'serviceId'              => 'ServiceId',
        'sortShrink'             => 'Sort',
        'type'                   => 'Type',
        'uq'                     => 'Uq',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->customConfigInfoShrink) {
            $res['CustomConfigInfo'] = $this->customConfigInfoShrink;
        }
        if (null !== $this->debug) {
            $res['Debug'] = $this->debug;
        }
        if (null !== $this->fieldsShrink) {
            $res['Fields'] = $this->fieldsShrink;
        }
        if (null !== $this->filters) {
            $res['Filters'] = $this->filters;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->queries) {
            $res['Queries'] = $this->queries;
        }
        if (null !== $this->rankModelInfoShrink) {
            $res['RankModelInfo'] = $this->rankModelInfoShrink;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->sortShrink) {
            $res['Sort'] = $this->sortShrink;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uq) {
            $res['Uq'] = $this->uq;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostMSSearchEnhanceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['CustomConfigInfo'])) {
            $model->customConfigInfoShrink = $map['CustomConfigInfo'];
        }
        if (isset($map['Debug'])) {
            $model->debug = $map['Debug'];
        }
        if (isset($map['Fields'])) {
            $model->fieldsShrink = $map['Fields'];
        }
        if (isset($map['Filters'])) {
            $model->filters = $map['Filters'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Queries'])) {
            $model->queries = $map['Queries'];
        }
        if (isset($map['RankModelInfo'])) {
            $model->rankModelInfoShrink = $map['RankModelInfo'];
        }
        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Sort'])) {
            $model->sortShrink = $map['Sort'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uq'])) {
            $model->uq = $map['Uq'];
        }

        return $model;
    }
}
