<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody\data\list_;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody\data\list_\instanceDb\hotDbList;

class instanceDb extends Model
{
    /**
     * @var hotDbList
     */
    public $hotDbList;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'hotDbList' => 'HotDbList',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
        if (null !== $this->hotDbList) {
            $this->hotDbList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotDbList) {
            $res['HotDbList'] = null !== $this->hotDbList ? $this->hotDbList->toArray($noStream) : $this->hotDbList;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (isset($map['HotDbList'])) {
            $model->hotDbList = hotDbList::fromMap($map['HotDbList']);
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
