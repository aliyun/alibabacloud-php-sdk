<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DescribeClusterNodesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $nodeIps;

    /**
     * @var string
     */
    public $nodeLabels;

    /**
     * @var string
     */
    public $nodeNames;

    /**
     * @var string
     */
    public $nodepoolId;

    /**
     * @var string
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'instanceIds' => 'instanceIds',
        'nodeIps' => 'nodeIps',
        'nodeLabels' => 'nodeLabels',
        'nodeNames' => 'nodeNames',
        'nodepoolId' => 'nodepool_id',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'state' => 'state',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['instanceIds'] = $this->instanceIds;
        }

        if (null !== $this->nodeIps) {
            $res['nodeIps'] = $this->nodeIps;
        }

        if (null !== $this->nodeLabels) {
            $res['nodeLabels'] = $this->nodeLabels;
        }

        if (null !== $this->nodeNames) {
            $res['nodeNames'] = $this->nodeNames;
        }

        if (null !== $this->nodepoolId) {
            $res['nodepool_id'] = $this->nodepoolId;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['instanceIds'])) {
            $model->instanceIds = $map['instanceIds'];
        }

        if (isset($map['nodeIps'])) {
            $model->nodeIps = $map['nodeIps'];
        }

        if (isset($map['nodeLabels'])) {
            $model->nodeLabels = $map['nodeLabels'];
        }

        if (isset($map['nodeNames'])) {
            $model->nodeNames = $map['nodeNames'];
        }

        if (isset($map['nodepool_id'])) {
            $model->nodepoolId = $map['nodepool_id'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
