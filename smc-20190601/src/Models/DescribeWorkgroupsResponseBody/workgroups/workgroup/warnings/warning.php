<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeWorkgroupsResponseBody\workgroups\workgroup\warnings;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeWorkgroupsResponseBody\workgroups\workgroup\warnings\warning\sourceIds;

class warning extends Model
{
    /**
     * @var sourceIds
     */
    public $sourceIds;

    /**
     * @var string
     */
    public $warningType;
    protected $_name = [
        'sourceIds' => 'SourceIds',
        'warningType' => 'WarningType',
    ];

    public function validate()
    {
        if (null !== $this->sourceIds) {
            $this->sourceIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sourceIds) {
            $res['SourceIds'] = null !== $this->sourceIds ? $this->sourceIds->toArray($noStream) : $this->sourceIds;
        }

        if (null !== $this->warningType) {
            $res['WarningType'] = $this->warningType;
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
        if (isset($map['SourceIds'])) {
            $model->sourceIds = sourceIds::fromMap($map['SourceIds']);
        }

        if (isset($map['WarningType'])) {
            $model->warningType = $map['WarningType'];
        }

        return $model;
    }
}
