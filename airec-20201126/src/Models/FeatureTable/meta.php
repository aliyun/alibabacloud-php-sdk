<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\FeatureTable;

use AlibabaCloud\SDK\Airec\V20201126\Models\FeatureTable\meta\featureList;
use AlibabaCloud\Tea\Model;

class meta extends Model
{
    /**
     * @example 907648f5-abae-44fd-a4c4-525cc25947e9
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @var featureList[]
     */
    public $featureList;

    /**
     * @example true
     *
     * @var bool
     */
    public $internal;

    /**
     * @example FeatureTable
     *
     * @var string
     */
    public $metaType;

    /**
     * @example test_project.test_table
     *
     * @var string
     */
    public $source;

    /**
     * @example 86400
     *
     * @var int
     */
    public $updateFrequency;
    protected $_name = [
        'dataSourceId'    => 'DataSourceId',
        'featureList'     => 'FeatureList',
        'internal'        => 'Internal',
        'metaType'        => 'MetaType',
        'source'          => 'Source',
        'updateFrequency' => 'UpdateFrequency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->featureList) {
            $res['FeatureList'] = [];
            if (null !== $this->featureList && \is_array($this->featureList)) {
                $n = 0;
                foreach ($this->featureList as $item) {
                    $res['FeatureList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->internal) {
            $res['Internal'] = $this->internal;
        }
        if (null !== $this->metaType) {
            $res['MetaType'] = $this->metaType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->updateFrequency) {
            $res['UpdateFrequency'] = $this->updateFrequency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return meta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['FeatureList'])) {
            if (!empty($map['FeatureList'])) {
                $model->featureList = [];
                $n                  = 0;
                foreach ($map['FeatureList'] as $item) {
                    $model->featureList[$n++] = null !== $item ? featureList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Internal'])) {
            $model->internal = $map['Internal'];
        }
        if (isset($map['MetaType'])) {
            $model->metaType = $map['MetaType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['UpdateFrequency'])) {
            $model->updateFrequency = $map['UpdateFrequency'];
        }

        return $model;
    }
}
