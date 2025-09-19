<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeExposedInstanceListResponseBody\exposedInstances;

use AlibabaCloud\Dara\Model;

class exposureComponentList extends Model
{
    /**
     * @var string
     */
    public $componentBizType;

    /**
     * @var string
     */
    public $componentName;

    /**
     * @var string
     */
    public $componentVersion;

    /**
     * @var string
     */
    public $listenPort;
    protected $_name = [
        'componentBizType' => 'ComponentBizType',
        'componentName' => 'ComponentName',
        'componentVersion' => 'ComponentVersion',
        'listenPort' => 'ListenPort',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->componentBizType) {
            $res['ComponentBizType'] = $this->componentBizType;
        }

        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }

        if (null !== $this->componentVersion) {
            $res['ComponentVersion'] = $this->componentVersion;
        }

        if (null !== $this->listenPort) {
            $res['ListenPort'] = $this->listenPort;
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
        if (isset($map['ComponentBizType'])) {
            $model->componentBizType = $map['ComponentBizType'];
        }

        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        if (isset($map['ComponentVersion'])) {
            $model->componentVersion = $map['ComponentVersion'];
        }

        if (isset($map['ListenPort'])) {
            $model->listenPort = $map['ListenPort'];
        }

        return $model;
    }
}
