<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAvailableResourceResponseBody\availableZoneList\supportedMode\supportedSerialList\supportedInstanceClassList\supportedExecutorList\nodeCount;

class supportedExecutorList extends Model
{
    /**
     * @var nodeCount
     */
    public $nodeCount;
    protected $_name = [
        'nodeCount' => 'NodeCount',
    ];

    public function validate()
    {
        if (null !== $this->nodeCount) {
            $this->nodeCount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeCount) {
            $res['NodeCount'] = null !== $this->nodeCount ? $this->nodeCount->toArray($noStream) : $this->nodeCount;
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
        if (isset($map['NodeCount'])) {
            $model->nodeCount = nodeCount::fromMap($map['NodeCount']);
        }

        return $model;
    }
}
