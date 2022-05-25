<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace\aliyunProductMetricList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace\detail;
use AlibabaCloud\Tea\Model;

class describeHybridMonitorNamespace extends Model
{
    /**
     * @var aliyunProductMetricList[]
     */
    public $aliyunProductMetricList;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var detail
     */
    public $detail;

    /**
     * @var string
     */
    public $id;

    /**
     * @var int
     */
    public $isDelete;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $notAliyunTaskNumber;
    protected $_name = [
        'aliyunProductMetricList' => 'AliyunProductMetricList',
        'createTime'              => 'CreateTime',
        'description'             => 'Description',
        'detail'                  => 'Detail',
        'id'                      => 'Id',
        'isDelete'                => 'IsDelete',
        'modifyTime'              => 'ModifyTime',
        'namespace'               => 'Namespace',
        'notAliyunTaskNumber'     => 'NotAliyunTaskNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunProductMetricList) {
            $res['AliyunProductMetricList'] = [];
            if (null !== $this->aliyunProductMetricList && \is_array($this->aliyunProductMetricList)) {
                $n = 0;
                foreach ($this->aliyunProductMetricList as $item) {
                    $res['AliyunProductMetricList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detail) {
            $res['Detail'] = null !== $this->detail ? $this->detail->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->notAliyunTaskNumber) {
            $res['NotAliyunTaskNumber'] = $this->notAliyunTaskNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return describeHybridMonitorNamespace
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunProductMetricList'])) {
            if (!empty($map['AliyunProductMetricList'])) {
                $model->aliyunProductMetricList = [];
                $n                              = 0;
                foreach ($map['AliyunProductMetricList'] as $item) {
                    $model->aliyunProductMetricList[$n++] = null !== $item ? aliyunProductMetricList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Detail'])) {
            $model->detail = detail::fromMap($map['Detail']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NotAliyunTaskNumber'])) {
            $model->notAliyunTaskNumber = $map['NotAliyunTaskNumber'];
        }

        return $model;
    }
}
