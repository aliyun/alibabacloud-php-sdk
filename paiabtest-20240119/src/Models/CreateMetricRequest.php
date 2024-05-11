<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models;

use AlibabaCloud\Tea\Model;

class CreateMetricRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $metricGroupId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sourceTableMetaId;
    protected $_name = [
        'definition'        => 'Definition',
        'description'       => 'Description',
        'metricGroupId'     => 'MetricGroupId',
        'name'              => 'Name',
        'sourceTableMetaId' => 'SourceTableMetaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->metricGroupId) {
            $res['MetricGroupId'] = $this->metricGroupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->sourceTableMetaId) {
            $res['SourceTableMetaId'] = $this->sourceTableMetaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['MetricGroupId'])) {
            $model->metricGroupId = $map['MetricGroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SourceTableMetaId'])) {
            $model->sourceTableMetaId = $map['SourceTableMetaId'];
        }

        return $model;
    }
}
