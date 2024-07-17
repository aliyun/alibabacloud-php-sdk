<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ModifyNodeConfigRequest extends Model
{
    /**
     * @description Specifies whether to enable the index.
     *
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @description The number of data replicas.
     *
     * @example 1
     *
     * @var int
     */
    public $dataDuplicateNumber;

    /**
     * @description The number of data shards.
     *
     * @example 1
     *
     * @var int
     */
    public $dataFragmentNumber;

    /**
     * @description The traffic percentage.
     *
     * @example -100
     *
     * @var int
     */
    public $flowRatio;

    /**
     * @description The minimum service ratio.
     *
     * @example 10
     *
     * @var int
     */
    public $minServicePercent;

    /**
     * @description Specifies whether to mount the cluster.
     *
     * @example true
     *
     * @var bool
     */
    public $published;

    /**
     * @description The name of the cluster.
     *
     * @example vpc_sh_domain_2
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The name of the data source. Valid values: -search: search for data. -not_search: do not search for data.
     *
     * @example ha-cn-2r42ostoc01_0704
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The name of the configuration before the modification.
     *
     * This parameter is required.
     * @example ha-cn-zvp2iv9a401_qrs
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the algorithm. Valid values:
     *
     *   pop: a popularity model.
     *   cp: a category prediction model.
     *   hot: a top search model.
     *   hint: a hint model.
     *   suggest: a drop-down suggestions model.
     *
     * This parameter is required.
     * @example " "
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'active'              => 'active',
        'dataDuplicateNumber' => 'dataDuplicateNumber',
        'dataFragmentNumber'  => 'dataFragmentNumber',
        'flowRatio'           => 'flowRatio',
        'minServicePercent'   => 'minServicePercent',
        'published'           => 'published',
        'clusterName'         => 'clusterName',
        'dataSourceName'      => 'dataSourceName',
        'name'                => 'name',
        'type'                => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }
        if (null !== $this->dataDuplicateNumber) {
            $res['dataDuplicateNumber'] = $this->dataDuplicateNumber;
        }
        if (null !== $this->dataFragmentNumber) {
            $res['dataFragmentNumber'] = $this->dataFragmentNumber;
        }
        if (null !== $this->flowRatio) {
            $res['flowRatio'] = $this->flowRatio;
        }
        if (null !== $this->minServicePercent) {
            $res['minServicePercent'] = $this->minServicePercent;
        }
        if (null !== $this->published) {
            $res['published'] = $this->published;
        }
        if (null !== $this->clusterName) {
            $res['clusterName'] = $this->clusterName;
        }
        if (null !== $this->dataSourceName) {
            $res['dataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyNodeConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }
        if (isset($map['dataDuplicateNumber'])) {
            $model->dataDuplicateNumber = $map['dataDuplicateNumber'];
        }
        if (isset($map['dataFragmentNumber'])) {
            $model->dataFragmentNumber = $map['dataFragmentNumber'];
        }
        if (isset($map['flowRatio'])) {
            $model->flowRatio = $map['flowRatio'];
        }
        if (isset($map['minServicePercent'])) {
            $model->minServicePercent = $map['minServicePercent'];
        }
        if (isset($map['published'])) {
            $model->published = $map['published'];
        }
        if (isset($map['clusterName'])) {
            $model->clusterName = $map['clusterName'];
        }
        if (isset($map['dataSourceName'])) {
            $model->dataSourceName = $map['dataSourceName'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
