<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody\data\list_;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeHotDbListResponseBody\data\list_\instanceDb\hotDbList;
use AlibabaCloud\Tea\Model;

class instanceDb extends Model
{
    /**
     * @var hotDbList
     */
    public $hotDbList;

    /**
     * @description The name of the instance.
     *
     * @example instanceName
     *
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'hotDbList'    => 'HotDbList',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotDbList) {
            $res['HotDbList'] = null !== $this->hotDbList ? $this->hotDbList->toMap() : null;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (isset($map['HotDbList'])) {
            $model->hotDbList = hotDbList::fromMap($map['HotDbList']);
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
