<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class GetModuleRequest extends Model
{
    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $moduleType;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'moduleId'   => 'ModuleId',
        'moduleType' => 'ModuleType',
        'source'     => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->moduleType) {
            $res['ModuleType'] = $this->moduleType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetModuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ModuleType'])) {
            $model->moduleType = $map['ModuleType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
