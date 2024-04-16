<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class ListModuleModelsRequest extends Model
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
    public $subTypes;

    /**
     * @var bool
     */
    public $withContent;
    protected $_name = [
        'moduleList'  => 'ModuleList',
        'source'      => 'Source',
        'subTypes'    => 'SubTypes',
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
        if (null !== $this->subTypes) {
            $res['SubTypes'] = $this->subTypes;
        }
        if (null !== $this->withContent) {
            $res['WithContent'] = $this->withContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListModuleModelsRequest
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
        if (isset($map['SubTypes'])) {
            $model->subTypes = $map['SubTypes'];
        }
        if (isset($map['WithContent'])) {
            $model->withContent = $map['WithContent'];
        }

        return $model;
    }
}
