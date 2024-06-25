<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ExecuteSqlInstanceRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $combineParam;

    /**
     * @description This parameter is required.
     *
     * @example select * from test
     *
     * @var string
     */
    public $content;

    /**
     * @example vpc_hz_domain_1
     *
     * @var string
     */
    public $domain;

    /**
     * @var mixed[]
     */
    public $dynamicParam;

    /**
     * @var mixed[]
     */
    public $kvpair;

    /**
     * @var mixed[]
     */
    public $params;

    /**
     * @var mixed[]
     */
    public $staticParam;
    protected $_name = [
        'combineParam' => 'combineParam',
        'content'      => 'content',
        'domain'       => 'domain',
        'dynamicParam' => 'dynamicParam',
        'kvpair'       => 'kvpair',
        'params'       => 'params',
        'staticParam'  => 'staticParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->combineParam) {
            $res['combineParam'] = $this->combineParam;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->dynamicParam) {
            $res['dynamicParam'] = $this->dynamicParam;
        }
        if (null !== $this->kvpair) {
            $res['kvpair'] = $this->kvpair;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->staticParam) {
            $res['staticParam'] = $this->staticParam;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExecuteSqlInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['combineParam'])) {
            $model->combineParam = $map['combineParam'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['dynamicParam'])) {
            $model->dynamicParam = $map['dynamicParam'];
        }
        if (isset($map['kvpair'])) {
            $model->kvpair = $map['kvpair'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['staticParam'])) {
            $model->staticParam = $map['staticParam'];
        }

        return $model;
    }
}
