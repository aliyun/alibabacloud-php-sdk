<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody\data\list_;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody\data\list_\instanceDb\hotDbList;
use AlibabaCloud\Tea\Model;

class instanceDb extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var hotDbList
     */
    public $hotDbList;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'hotDbList'    => 'HotDbList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->hotDbList) {
            $res['HotDbList'] = null !== $this->hotDbList ? $this->hotDbList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceDb
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['HotDbList'])) {
            $model->hotDbList = hotDbList::fromMap($map['HotDbList']);
        }

        return $model;
    }
}
