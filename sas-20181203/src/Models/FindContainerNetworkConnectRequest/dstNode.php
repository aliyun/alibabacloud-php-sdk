<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\FindContainerNetworkConnectRequest;

use AlibabaCloud\Dara\Model;

class dstNode extends Model
{
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string[]
     */
    public $nodeIds;
    /**
     * @var string
     */
    public $nodeType;
    /**
     * @var string
     */
    public $podName;
    protected $_name = [
        'appName'   => 'AppName',
        'clusterId' => 'ClusterId',
        'namespace' => 'Namespace',
        'nodeIds'   => 'NodeIds',
        'nodeType'  => 'NodeType',
        'podName'   => 'PodName',
    ];

    public function validate()
    {
        if (\is_array($this->nodeIds)) {
            Model::validateArray($this->nodeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->nodeIds) {
            if (\is_array($this->nodeIds)) {
                $res['NodeIds'] = [];
                $n1             = 0;
                foreach ($this->nodeIds as $item1) {
                    $res['NodeIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->podName) {
            $res['PodName'] = $this->podName;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = [];
                $n1             = 0;
                foreach ($map['NodeIds'] as $item1) {
                    $model->nodeIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['PodName'])) {
            $model->podName = $map['PodName'];
        }

        return $model;
    }
}
