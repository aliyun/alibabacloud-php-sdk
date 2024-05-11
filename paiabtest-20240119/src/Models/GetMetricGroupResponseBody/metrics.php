<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models\GetMetricGroupResponseBody;

use AlibabaCloud\Tea\Model;

class metrics extends Model
{
    /**
     * @var string
     */
    public $definition;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $metricId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $relatedExperimentNumber;

    /**
     * @var string
     */
    public $sourceTableMetaId;
    protected $_name = [
        'definition'              => 'Definition',
        'description'             => 'Description',
        'gmtCreateTime'           => 'GmtCreateTime',
        'gmtModifiedTime'         => 'GmtModifiedTime',
        'metricId'                => 'MetricId',
        'name'                    => 'Name',
        'relatedExperimentNumber' => 'RelatedExperimentNumber',
        'sourceTableMetaId'       => 'SourceTableMetaId',
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
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->metricId) {
            $res['MetricId'] = $this->metricId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->relatedExperimentNumber) {
            $res['RelatedExperimentNumber'] = $this->relatedExperimentNumber;
        }
        if (null !== $this->sourceTableMetaId) {
            $res['SourceTableMetaId'] = $this->sourceTableMetaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metrics
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
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['MetricId'])) {
            $model->metricId = $map['MetricId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RelatedExperimentNumber'])) {
            $model->relatedExperimentNumber = $map['RelatedExperimentNumber'];
        }
        if (isset($map['SourceTableMetaId'])) {
            $model->sourceTableMetaId = $map['SourceTableMetaId'];
        }

        return $model;
    }
}
