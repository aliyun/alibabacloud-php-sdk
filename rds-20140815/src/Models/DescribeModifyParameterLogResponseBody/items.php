<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeModifyParameterLogResponseBody\items\parameterChangeLog;

class items extends Model
{
    /**
     * @var parameterChangeLog[]
     */
    public $parameterChangeLog;
    protected $_name = [
        'parameterChangeLog' => 'ParameterChangeLog',
    ];

    public function validate()
    {
        if (\is_array($this->parameterChangeLog)) {
            Model::validateArray($this->parameterChangeLog);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterChangeLog) {
            if (\is_array($this->parameterChangeLog)) {
                $res['ParameterChangeLog'] = [];
                $n1 = 0;
                foreach ($this->parameterChangeLog as $item1) {
                    $res['ParameterChangeLog'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ParameterChangeLog'])) {
            if (!empty($map['ParameterChangeLog'])) {
                $model->parameterChangeLog = [];
                $n1 = 0;
                foreach ($map['ParameterChangeLog'] as $item1) {
                    $model->parameterChangeLog[$n1++] = parameterChangeLog::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
