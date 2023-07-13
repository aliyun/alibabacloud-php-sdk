<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace\aliyunProductMetricList\namespaceList;
use AlibabaCloud\Tea\Model;

class aliyunProductMetricList extends Model
{
    /**
     * @description The list of namespaces.
     *
     * @var namespaceList[]
     */
    public $namespaceList;

    /**
     * @description The ID of the request.
     *
     * @example 120886317861****
     *
     * @var int
     */
    public $userId;

    /**
     * @example products:- namespace: acs_ecs_dashboard metric_info: - metric_list: - cpu_total dimension: \"\"
     *
     * @var string
     */
    public $YAMLConfig;
    protected $_name = [
        'namespaceList' => 'NamespaceList',
        'userId'        => 'UserId',
        'YAMLConfig'    => 'YAMLConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->namespaceList) {
            $res['NamespaceList'] = [];
            if (null !== $this->namespaceList && \is_array($this->namespaceList)) {
                $n = 0;
                foreach ($this->namespaceList as $item) {
                    $res['NamespaceList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return aliyunProductMetricList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NamespaceList'])) {
            if (!empty($map['NamespaceList'])) {
                $model->namespaceList = [];
                $n                    = 0;
                foreach ($map['NamespaceList'] as $item) {
                    $model->namespaceList[$n++] = null !== $item ? namespaceList::fromMap($item) : $item;
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
