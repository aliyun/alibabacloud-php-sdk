<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models;

use AlibabaCloud\Tea\Model;

class DescribeTraceByConfigurationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $endTs;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $group;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $startTs;
    protected $_name = [
        'dataId'      => 'DataId',
        'endTs'       => 'EndTs',
        'group'       => 'Group',
        'namespaceId' => 'NamespaceId',
        'startTs'     => 'StartTs',
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
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTraceByConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }

        return $model;
    }
}
