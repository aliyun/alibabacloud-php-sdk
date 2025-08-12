<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace\aliyunProductMetricList\namespaceList;

class aliyunProductMetricList extends Model
{
    /**
     * @var namespaceList[]
     */
    public $namespaceList;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $YAMLConfig;
    protected $_name = [
        'namespaceList' => 'NamespaceList',
        'userId' => 'UserId',
        'YAMLConfig' => 'YAMLConfig',
    ];

    public function validate()
    {
        if (\is_array($this->namespaceList)) {
            Model::validateArray($this->namespaceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->namespaceList) {
            if (\is_array($this->namespaceList)) {
                $res['NamespaceList'] = [];
                $n1 = 0;
                foreach ($this->namespaceList as $item1) {
                    $res['NamespaceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->YAMLConfig) {
            $res['YAMLConfig'] = $this->YAMLConfig;
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
        if (isset($map['NamespaceList'])) {
            if (!empty($map['NamespaceList'])) {
                $model->namespaceList = [];
                $n1 = 0;
                foreach ($map['NamespaceList'] as $item1) {
                    $model->namespaceList[$n1] = namespaceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['YAMLConfig'])) {
            $model->YAMLConfig = $map['YAMLConfig'];
        }

        return $model;
    }
}
