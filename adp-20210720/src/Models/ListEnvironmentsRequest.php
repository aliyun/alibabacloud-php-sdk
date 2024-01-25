<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\Tea\Model;

class ListEnvironmentsRequest extends Model
{
    /**
     * @example 1f597e3d-6c11-4ed9-8f59-xxx
     *
     * @var string
     */
    public $clusterUID;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @example trident
     *
     * @var string
     */
    public $foundationType;

    /**
     * @example name
     *
     * @var string
     */
    public $fuzzy;

    /**
     * @example INITING
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example production
     *
     * @var string
     */
    public $type;

    /**
     * @example alicloud
     *
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'clusterUID'     => 'clusterUID',
        'endpoint'       => 'endpoint',
        'foundationType' => 'foundationType',
        'fuzzy'          => 'fuzzy',
        'instanceStatus' => 'instanceStatus',
        'name'           => 'name',
        'pageNum'        => 'pageNum',
        'pageSize'       => 'pageSize',
        'type'           => 'type',
        'vendorType'     => 'vendorType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterUID) {
            $res['clusterUID'] = $this->clusterUID;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->foundationType) {
            $res['foundationType'] = $this->foundationType;
        }
        if (null !== $this->fuzzy) {
            $res['fuzzy'] = $this->fuzzy;
        }
        if (null !== $this->instanceStatus) {
            $res['instanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pageNum) {
            $res['pageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEnvironmentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clusterUID'])) {
            $model->clusterUID = $map['clusterUID'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['foundationType'])) {
            $model->foundationType = $map['foundationType'];
        }
        if (isset($map['fuzzy'])) {
            $model->fuzzy = $map['fuzzy'];
        }
        if (isset($map['instanceStatus'])) {
            $model->instanceStatus = $map['instanceStatus'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pageNum'])) {
            $model->pageNum = $map['pageNum'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
