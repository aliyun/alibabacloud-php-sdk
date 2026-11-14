<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListAgentInstanceMemoryRequest extends Model
{
    /**
     * @var string
     */
    public $agentPlatform;

    /**
     * @var string
     */
    public $agentProvider;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string[]
     */
    public $excludedEndUserIds;

    /**
     * @var string[]
     */
    public $memoryStatuses;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $searchKeyword;

    /**
     * @var string
     */
    public $searchType;
    protected $_name = [
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'bizType' => 'BizType',
        'endUserIds' => 'EndUserIds',
        'excludedEndUserIds' => 'ExcludedEndUserIds',
        'memoryStatuses' => 'MemoryStatuses',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'searchKeyword' => 'SearchKeyword',
        'searchType' => 'SearchType',
    ];

    public function validate()
    {
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        if (\is_array($this->excludedEndUserIds)) {
            Model::validateArray($this->excludedEndUserIds);
        }
        if (\is_array($this->memoryStatuses)) {
            Model::validateArray($this->memoryStatuses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentPlatform) {
            $res['AgentPlatform'] = $this->agentPlatform;
        }

        if (null !== $this->agentProvider) {
            $res['AgentProvider'] = $this->agentProvider;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->endUserIds) {
            if (\is_array($this->endUserIds)) {
                $res['EndUserIds'] = [];
                $n1 = 0;
                foreach ($this->endUserIds as $item1) {
                    $res['EndUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludedEndUserIds) {
            if (\is_array($this->excludedEndUserIds)) {
                $res['ExcludedEndUserIds'] = [];
                $n1 = 0;
                foreach ($this->excludedEndUserIds as $item1) {
                    $res['ExcludedEndUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->memoryStatuses) {
            if (\is_array($this->memoryStatuses)) {
                $res['MemoryStatuses'] = [];
                $n1 = 0;
                foreach ($this->memoryStatuses as $item1) {
                    $res['MemoryStatuses'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->searchKeyword) {
            $res['SearchKeyword'] = $this->searchKeyword;
        }

        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
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
        if (isset($map['AgentPlatform'])) {
            $model->agentPlatform = $map['AgentPlatform'];
        }

        if (isset($map['AgentProvider'])) {
            $model->agentProvider = $map['AgentProvider'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = [];
                $n1 = 0;
                foreach ($map['EndUserIds'] as $item1) {
                    $model->endUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExcludedEndUserIds'])) {
            if (!empty($map['ExcludedEndUserIds'])) {
                $model->excludedEndUserIds = [];
                $n1 = 0;
                foreach ($map['ExcludedEndUserIds'] as $item1) {
                    $model->excludedEndUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MemoryStatuses'])) {
            if (!empty($map['MemoryStatuses'])) {
                $model->memoryStatuses = [];
                $n1 = 0;
                foreach ($map['MemoryStatuses'] as $item1) {
                    $model->memoryStatuses[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SearchKeyword'])) {
            $model->searchKeyword = $map['SearchKeyword'];
        }

        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }

        return $model;
    }
}
