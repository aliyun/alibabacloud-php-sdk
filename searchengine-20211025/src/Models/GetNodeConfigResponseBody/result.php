<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetNodeConfigResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Indicates whether the expression is the default one.
     *
     * @example 1
     *
     * @var bool
     */
    public $active;

    /**
     * @description The number of data replicas.
     *
     * @example 2
     *
     * @var int
     */
    public $dataDuplicateNumber;

    /**
     * @description The number of data shards.
     *
     * @example 2
     *
     * @var int
     */
    public $dataFragmentNumber;

    /**
     * @description The traffic percentage.
     *
     * @example 0
     *
     * @var int
     */
    public $flowRatio;

    /**
     * @description The minimum service ratio.
     *
     * @example 100
     *
     * @var int
     */
    public $minServicePercent;

    /**
     * @description Indicates whether the node is associated with the cluster.
     *
     * @example true
     *
     * @var bool
     */
    public $published;
    protected $_name = [
        'active'              => 'active',
        'dataDuplicateNumber' => 'dataDuplicateNumber',
        'dataFragmentNumber'  => 'dataFragmentNumber',
        'flowRatio'           => 'flowRatio',
        'minServicePercent'   => 'minServicePercent',
        'published'           => 'published',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
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

        return $model;
    }
}
