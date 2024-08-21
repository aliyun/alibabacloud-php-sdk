<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class ListCertWarehouseRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The instance ID of the certificate application repository.
     *
     * @example 14dcc8afc7578e1f
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the certificate application repository. Fuzzy match is supported.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The number of entries to return on each page. Default value: 50.
     *
     * @example 50
     *
     * @var int
     */
    public $showSize;

    /**
     * @description The type of the certificate application repository. Valid values:
     *
     *   **ssl**: certificate application repository of SSL certificates
     *   **uploadPCA**: certificate application repository of uploaded private certificates
     *   **free**: certificate application repository of free certificates, available only on the China site (aliyun.com)
     *   **aliyunPCA**: certificate application repository of private certificates purchased from Alibaba Cloud Private Certificate Authority (PCA), available only on the China site (aliyun.com)
     *   **disable**: disabled certificate application repository
     *
     * @example aliyunPCA
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'instanceId'  => 'InstanceId',
        'name'        => 'Name',
        'showSize'    => 'ShowSize',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCertWarehouseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
