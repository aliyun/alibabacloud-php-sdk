<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class CreateDatasetVersionRequest extends Model
{
    /**
     * @var int
     */
    public $dataCount;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var string
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $importInfo;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $property;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $uri;
    protected $_name = [
        'dataCount' => 'DataCount',
        'dataSize' => 'DataSize',
        'dataSourceType' => 'DataSourceType',
        'description' => 'Description',
        'importInfo' => 'ImportInfo',
        'labels' => 'Labels',
        'options' => 'Options',
        'property' => 'Property',
        'sourceId' => 'SourceId',
        'sourceType' => 'SourceType',
        'uri' => 'Uri',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataCount) {
            $res['DataCount'] = $this->dataCount;
        }

        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }

        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->importInfo) {
            $res['ImportInfo'] = $this->importInfo;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }

        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['DataCount'])) {
            $model->dataCount = $map['DataCount'];
        }

        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }

        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ImportInfo'])) {
            $model->importInfo = $map['ImportInfo'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = Label::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }

        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
