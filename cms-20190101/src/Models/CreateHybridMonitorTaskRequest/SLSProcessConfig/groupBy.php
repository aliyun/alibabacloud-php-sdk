<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateHybridMonitorTaskRequest\SLSProcessConfig;

use AlibabaCloud\Tea\Model;

class groupBy extends Model
{
    /**
     * @description The alias of the aggregation result.
     *
     * @example ApiResult
     *
     * @var string
     */
    public $alias;

    /**
     * @description The name of the key that is used to aggregate logs imported from Simple Log Service.
     *
     * @example code
     *
     * @var string
     */
    public $SLSKeyName;
    protected $_name = [
        'alias'      => 'Alias',
        'SLSKeyName' => 'SLSKeyName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->SLSKeyName) {
            $res['SLSKeyName'] = $this->SLSKeyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupBy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['SLSKeyName'])) {
            $model->SLSKeyName = $map['SLSKeyName'];
        }

        return $model;
    }
}
