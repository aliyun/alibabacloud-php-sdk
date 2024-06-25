<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models;

use AlibabaCloud\Tea\Model;

class DescribeConfigurationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example com.aliyun.acm.example
     *
     * @var string
     */
    public $dataId;

    /**
     * @description This parameter is required.
     *
     * @example DEFAULT_GROUP
     *
     * @var string
     */
    public $group;

    /**
     * @description This parameter is required.
     *
     * @example 101100d2-ca66-42ba-b706-****
     *
     * @var string
     */
    public $namespaceId;
    protected $_name = [
        'dataId'      => 'DataId',
        'group'       => 'Group',
        'namespaceId' => 'NamespaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        return $model;
    }
}
