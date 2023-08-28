<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Tea\Model;

class ModifyNodeConfigRequest extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var int
     */
    public $dataDuplicateNumber;

    /**
     * @var int
     */
    public $dataFragmentNumber;

    /**
     * @var int
     */
    public $minServicePercent;

    /**
     * @var bool
     */
    public $published;

    /**
     * @description The ID of the cluster.
     *
     * @example vpc_sh_domain_2
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The parameters in the request body.
     *
     * @example ha-cn-2r42ostoc01_0704
     *
     * @var string
     */
    public $dataSourceName;

    /**
     * @description The name of the cluster.
     *
     * @example ha-cn-zvp2iv9a401_qrs
     *
     * @var string
     */
    public $name;

    /**
     * @description The original name of the node.
     *
     * @example " "
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'active'              => 'active',
        'dataDuplicateNumber' => 'dataDuplicateNumber',
        'dataFragmentNumber'  => 'dataFragmentNumber',
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
