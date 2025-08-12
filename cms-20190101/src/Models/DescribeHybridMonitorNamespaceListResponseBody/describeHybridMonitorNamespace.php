<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace\aliyunProductMetricList;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeHybridMonitorNamespaceListResponseBody\describeHybridMonitorNamespace\detail;

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
     * @var string
     */
    public $namespaceType;

    /**
     * @var int
     */
    public $notAliyunTaskNumber;
    protected $_name = [
        'aliyunProductMetricList' => 'AliyunProductMetricList',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'detail' => 'Detail',
        'id' => 'Id',
        'isDelete' => 'IsDelete',
        'modifyTime' => 'ModifyTime',
        'namespace' => 'Namespace',
        'namespaceType' => 'NamespaceType',
        'notAliyunTaskNumber' => 'NotAliyunTaskNumber',
    ];

    public function validate()
    {
        if (\is_array($this->aliyunProductMetricList)) {
            Model::validateArray($this->aliyunProductMetricList);
        }
        if (null !== $this->detail) {
            $this->detail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunProductMetricList) {
            if (\is_array($this->aliyunProductMetricList)) {
                $res['AliyunProductMetricList'] = [];
                $n1 = 0;
                foreach ($this->aliyunProductMetricList as $item1) {
                    $res['AliyunProductMetricList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $res['Detail'] = null !== $this->detail ? $this->detail->toArray($noStream) : $this->detail;
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

        if (null !== $this->namespaceType) {
            $res['NamespaceType'] = $this->namespaceType;
        }

        if (null !== $this->notAliyunTaskNumber) {
            $res['NotAliyunTaskNumber'] = $this->notAliyunTaskNumber;
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
        if (isset($map['AliyunProductMetricList'])) {
            if (!empty($map['AliyunProductMetricList'])) {
                $model->aliyunProductMetricList = [];
                $n1 = 0;
                foreach ($map['AliyunProductMetricList'] as $item1) {
                    $model->aliyunProductMetricList[$n1] = aliyunProductMetricList::fromMap($item1);
                    ++$n1;
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

        if (isset($map['NamespaceType'])) {
            $model->namespaceType = $map['NamespaceType'];
        }

        if (isset($map['NotAliyunTaskNumber'])) {
            $model->notAliyunTaskNumber = $map['NotAliyunTaskNumber'];
        }

        return $model;
    }
}
