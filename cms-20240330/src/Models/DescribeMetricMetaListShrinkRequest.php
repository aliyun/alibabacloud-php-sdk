<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DescribeMetricMetaListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $labelsShrink;

    /**
     * @var string
     */
    public $metaFormat;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'labelsShrink' => 'labels',
        'metaFormat' => 'metaFormat',
        'metricName' => 'metricName',
        'namespace' => 'namespace',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labelsShrink) {
            $res['labels'] = $this->labelsShrink;
        }

        if (null !== $this->metaFormat) {
            $res['metaFormat'] = $this->metaFormat;
        }

        if (null !== $this->metricName) {
            $res['metricName'] = $this->metricName;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['labels'])) {
            $model->labelsShrink = $map['labels'];
        }

        if (isset($map['metaFormat'])) {
            $model->metaFormat = $map['metaFormat'];
        }

        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
