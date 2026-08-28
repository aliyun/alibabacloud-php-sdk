<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models;

use AlibabaCloud\Dara\Model;

class ListAgentSpecsRequest extends Model
{
    /**
     * @var string
     */
    public $agentSpecName;

    /**
     * @var string
     */
    public $bizTag;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $search;

    /**
     * @var bool
     */
    public $withCapabilities;
    protected $_name = [
        'agentSpecName' => 'agentSpecName',
        'bizTag' => 'bizTag',
        'orderBy' => 'orderBy',
        'owner' => 'owner',
        'pageNo' => 'pageNo',
        'pageSize' => 'pageSize',
        'scope' => 'scope',
        'search' => 'search',
        'withCapabilities' => 'withCapabilities',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentSpecName) {
            $res['agentSpecName'] = $this->agentSpecName;
        }

        if (null !== $this->bizTag) {
            $res['bizTag'] = $this->bizTag;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->owner) {
            $res['owner'] = $this->owner;
        }

        if (null !== $this->pageNo) {
            $res['pageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }

        if (null !== $this->search) {
            $res['search'] = $this->search;
        }

        if (null !== $this->withCapabilities) {
            $res['withCapabilities'] = $this->withCapabilities;
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
        if (isset($map['agentSpecName'])) {
            $model->agentSpecName = $map['agentSpecName'];
        }

        if (isset($map['bizTag'])) {
            $model->bizTag = $map['bizTag'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['owner'])) {
            $model->owner = $map['owner'];
        }

        if (isset($map['pageNo'])) {
            $model->pageNo = $map['pageNo'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }

        if (isset($map['search'])) {
            $model->search = $map['search'];
        }

        if (isset($map['withCapabilities'])) {
            $model->withCapabilities = $map['withCapabilities'];
        }

        return $model;
    }
}
