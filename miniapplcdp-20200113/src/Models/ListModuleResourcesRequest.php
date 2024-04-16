<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class ListModuleResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $moduleList;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $types;

    /**
     * @var bool
     */
    public $withContent;
    protected $_name = [
        'moduleList'  => 'ModuleList',
        'source'      => 'Source',
        'types'       => 'Types',
        'withContent' => 'WithContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleList) {
            $res['ModuleList'] = $this->moduleList;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }
        if (null !== $this->withContent) {
            $res['WithContent'] = $this->withContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListModuleResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleList'])) {
            $model->moduleList = $map['ModuleList'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Types'])) {
            $model->types = $map['Types'];
        }
        if (isset($map['WithContent'])) {
            $model->withContent = $map['WithContent'];
        }

        return $model;
    }
}
