<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodeDownStreamRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodeDownStreamRequest\listQuery\filterList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodeDownStreamRequest\listQuery\nodeIdList;
use AlibabaCloud\Tea\Model;

class listQuery extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $downStreamDepth;

    /**
     * @var filterList[]
     */
    public $filterList;

    /**
     * @description This parameter is required.
     *
     * @var nodeIdList[]
     */
    public $nodeIdList;

    /**
     * @example 123011
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'downStreamDepth' => 'DownStreamDepth',
        'filterList'      => 'FilterList',
        'nodeIdList'      => 'NodeIdList',
        'projectId'       => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downStreamDepth) {
            $res['DownStreamDepth'] = $this->downStreamDepth;
        }
        if (null !== $this->filterList) {
            $res['FilterList'] = [];
            if (null !== $this->filterList && \is_array($this->filterList)) {
                $n = 0;
                foreach ($this->filterList as $item) {
                    $res['FilterList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeIdList) {
            $res['NodeIdList'] = [];
            if (null !== $this->nodeIdList && \is_array($this->nodeIdList)) {
                $n = 0;
                foreach ($this->nodeIdList as $item) {
                    $res['NodeIdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listQuery
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownStreamDepth'])) {
            $model->downStreamDepth = $map['DownStreamDepth'];
        }
        if (isset($map['FilterList'])) {
            if (!empty($map['FilterList'])) {
                $model->filterList = [];
                $n                 = 0;
                foreach ($map['FilterList'] as $item) {
                    $model->filterList[$n++] = null !== $item ? filterList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeIdList'])) {
            if (!empty($map['NodeIdList'])) {
                $model->nodeIdList = [];
                $n                 = 0;
                foreach ($map['NodeIdList'] as $item) {
                    $model->nodeIdList[$n++] = null !== $item ? nodeIdList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
