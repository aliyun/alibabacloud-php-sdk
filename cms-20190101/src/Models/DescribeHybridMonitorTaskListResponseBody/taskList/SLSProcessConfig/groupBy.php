<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorTaskListResponseBody\taskList\SLSProcessConfig;

use AlibabaCloud\Dara\Model;

class groupBy extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $SLSKeyName;
    protected $_name = [
        'alias' => 'Alias',
        'SLSKeyName' => 'SLSKeyName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
