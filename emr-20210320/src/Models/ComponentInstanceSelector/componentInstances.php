<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\ComponentInstanceSelector;

use AlibabaCloud\Dara\Model;

class componentInstances extends Model
{
    /**
     * @var string
     */
    public $applicationName;
    /**
     * @var string
     */
    public $componentName;
    /**
     * @var string
     */
    public $nodeId;
    protected $_name = [
        'applicationName' => 'ApplicationName',
        'componentName'   => 'ComponentName',
        'nodeId'          => 'NodeId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->componentName) {
            $res['ComponentName'] = $this->componentName;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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
        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['ComponentName'])) {
            $model->componentName = $map['ComponentName'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
