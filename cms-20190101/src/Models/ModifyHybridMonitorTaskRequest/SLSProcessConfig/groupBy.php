<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\ModifyHybridMonitorTaskRequest\SLSProcessConfig;

use AlibabaCloud\Tea\Model;

class groupBy extends Model
{
    /**
     * @description The relationship between multiple filter conditions. Valid values:
     *
     *   and (default value): Logs are processed only if all filter conditions are met.
     *   or: Logs are processed if one of the filter conditions is met.
     *
     * @example ApiResult
     *
     * @var string
     */
    public $alias;

    /**
     * @description The tag key of the metric.
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
