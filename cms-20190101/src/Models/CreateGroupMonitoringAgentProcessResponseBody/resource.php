<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateGroupMonitoringAgentProcessResponseBody;

use AlibabaCloud\Dara\Model;

class resource extends Model
{
    /**
     * @var string
     */
    public $groupProcessId;
    protected $_name = [
        'groupProcessId' => 'GroupProcessId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupProcessId) {
            $res['GroupProcessId'] = $this->groupProcessId;
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
        if (isset($map['GroupProcessId'])) {
            $model->groupProcessId = $map['GroupProcessId'];
        }

        return $model;
    }
}
