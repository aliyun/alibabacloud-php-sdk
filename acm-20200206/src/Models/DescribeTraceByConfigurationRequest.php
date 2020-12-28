<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Acm\V20200206\Models;

use AlibabaCloud\Tea\Model;

class DescribeTraceByConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $startTs;

    /**
     * @var string
     */
    public $endTs;
    protected $_name = [
        'dataId'      => 'DataId',
        'group'       => 'Group',
        'namespaceId' => 'NamespaceId',
        'startTs'     => 'StartTs',
        'endTs'       => 'EndTs',
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
        if (null !== $this->startTs) {
            $res['StartTs'] = $this->startTs;
        }
        if (null !== $this->endTs) {
            $res['EndTs'] = $this->endTs;
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
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }
        if (isset($map['StartTs'])) {
            $model->startTs = $map['StartTs'];
        }
        if (isset($map['EndTs'])) {
            $model->endTs = $map['EndTs'];
        }

        return $model;
    }
}
