<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models;

use AlibabaCloud\Tea\Model;

class PostMSSearchEnhanceRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $body;

    /**
     * @var mixed[]
     */
    public $customConfigInfo;

    /**
     * @example 0
     *
     * @var bool
     */
    public $debug;

    /**
     * @var string[]
     */
    public $fields;

    /**
     * @example []
     *
     * @var string
     */
    public $filters;

    /**
     * @var float
     */
    public $minScore;

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
     * @var mixed[]
     */
    public $rankModelInfo;

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
     * @var string[]
     */
    public $sort;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $uq;

    /**
     * @var string
     */
    public $xDashScopeOpenAPISource;
    protected $_name = [
        'body'                    => 'Body',
        'customConfigInfo'        => 'CustomConfigInfo',
        'debug'                   => 'Debug',
        'fields'                  => 'Fields',
        'filters'                 => 'Filters',
        'minScore'                => 'MinScore',
        'page'                    => 'Page',
        'queries'                 => 'Queries',
        'rankModelInfo'           => 'RankModelInfo',
        'rows'                    => 'Rows',
        'serviceId'               => 'ServiceId',
        'sort'                    => 'Sort',
        'type'                    => 'Type',
        'uq'                      => 'Uq',
        'xDashScopeOpenAPISource' => 'X-DashScope-OpenAPISource',
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
        if (null !== $this->customConfigInfo) {
            $res['CustomConfigInfo'] = $this->customConfigInfo;
        }
        if (null !== $this->debug) {
            $res['Debug'] = $this->debug;
        }
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->filters) {
            $res['Filters'] = $this->filters;
        }
        if (null !== $this->minScore) {
            $res['MinScore'] = $this->minScore;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->queries) {
            $res['Queries'] = $this->queries;
        }
        if (null !== $this->rankModelInfo) {
            $res['RankModelInfo'] = $this->rankModelInfo;
        }
        if (null !== $this->rows) {
            $res['Rows'] = $this->rows;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uq) {
            $res['Uq'] = $this->uq;
        }
        if (null !== $this->xDashScopeOpenAPISource) {
            $res['X-DashScope-OpenAPISource'] = $this->xDashScopeOpenAPISource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PostMSSearchEnhanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['CustomConfigInfo'])) {
            $model->customConfigInfo = $map['CustomConfigInfo'];
        }
        if (isset($map['Debug'])) {
            $model->debug = $map['Debug'];
        }
        if (isset($map['Fields'])) {
            if (!empty($map['Fields'])) {
                $model->fields = $map['Fields'];
            }
        }
        if (isset($map['Filters'])) {
            $model->filters = $map['Filters'];
        }
        if (isset($map['MinScore'])) {
            $model->minScore = $map['MinScore'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Queries'])) {
            $model->queries = $map['Queries'];
        }
        if (isset($map['RankModelInfo'])) {
            $model->rankModelInfo = $map['RankModelInfo'];
        }
        if (isset($map['Rows'])) {
            $model->rows = $map['Rows'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['Sort'])) {
            if (!empty($map['Sort'])) {
                $model->sort = $map['Sort'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uq'])) {
            $model->uq = $map['Uq'];
        }
        if (isset($map['X-DashScope-OpenAPISource'])) {
            $model->xDashScopeOpenAPISource = $map['X-DashScope-OpenAPISource'];
        }

        return $model;
    }
}
