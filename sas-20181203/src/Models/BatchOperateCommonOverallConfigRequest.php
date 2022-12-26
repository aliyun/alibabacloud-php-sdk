<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class BatchOperateCommonOverallConfigRequest extends Model
{
    /**
     * @example on
     *
     * @var string
     */
    public $config;

    /**
     * @var string[]
     */
    public $typeList;
    protected $_name = [
        'config'   => 'Config',
        'typeList' => 'TypeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->typeList) {
            $res['TypeList'] = $this->typeList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchOperateCommonOverallConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['TypeList'])) {
            if (!empty($map['TypeList'])) {
                $model->typeList = $map['TypeList'];
            }
        }

        return $model;
    }
}
