<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodeDownStreamRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodeDownStreamRequest\listQuery\filterList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodeDownStreamRequest\listQuery\nodeIdList;

class listQuery extends Model
{
    /**
     * @var int
     */
    public $downStreamDepth;

    /**
     * @var filterList[]
     */
    public $filterList;

    /**
     * @var nodeIdList[]
     */
    public $nodeIdList;

    /**
     * @var int
     */
    public $projectId;
    protected $_name = [
        'downStreamDepth' => 'DownStreamDepth',
        'filterList' => 'FilterList',
        'nodeIdList' => 'NodeIdList',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
        if (\is_array($this->filterList)) {
            Model::validateArray($this->filterList);
        }
        if (\is_array($this->nodeIdList)) {
            Model::validateArray($this->nodeIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downStreamDepth) {
            $res['DownStreamDepth'] = $this->downStreamDepth;
        }

        if (null !== $this->filterList) {
            if (\is_array($this->filterList)) {
                $res['FilterList'] = [];
                $n1 = 0;
                foreach ($this->filterList as $item1) {
                    $res['FilterList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nodeIdList) {
            if (\is_array($this->nodeIdList)) {
                $res['NodeIdList'] = [];
                $n1 = 0;
                foreach ($this->nodeIdList as $item1) {
                    $res['NodeIdList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
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
        if (isset($map['DownStreamDepth'])) {
            $model->downStreamDepth = $map['DownStreamDepth'];
        }

        if (isset($map['FilterList'])) {
            if (!empty($map['FilterList'])) {
                $model->filterList = [];
                $n1 = 0;
                foreach ($map['FilterList'] as $item1) {
                    $model->filterList[$n1] = filterList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['NodeIdList'])) {
            if (!empty($map['NodeIdList'])) {
                $model->nodeIdList = [];
                $n1 = 0;
                foreach ($map['NodeIdList'] as $item1) {
                    $model->nodeIdList[$n1] = nodeIdList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
