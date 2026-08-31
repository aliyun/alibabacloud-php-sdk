<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListGovernObjectsRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $governItemType;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $projectNames;

    /**
     * @var string[]
     */
    public $statusList;

    /**
     * @var string
     */
    public $viewType;
    protected $_name = [
        'governItemType' => 'GovernItemType',
        'keyword' => 'Keyword',
        'owner' => 'Owner',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectNames' => 'ProjectNames',
        'statusList' => 'StatusList',
        'viewType' => 'ViewType',
    ];

    public function validate()
    {
        if (\is_array($this->projectNames)) {
            Model::validateArray($this->projectNames);
        }
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->governItemType) {
            $res['GovernItemType'] = $this->governItemType;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectNames) {
            if (\is_array($this->projectNames)) {
                $res['ProjectNames'] = [];
                $n1 = 0;
                foreach ($this->projectNames as $item1) {
                    $res['ProjectNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->viewType) {
            $res['ViewType'] = $this->viewType;
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
        if (isset($map['GovernItemType'])) {
            $model->governItemType = $map['GovernItemType'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectNames'])) {
            if (!empty($map['ProjectNames'])) {
                $model->projectNames = [];
                $n1 = 0;
                foreach ($map['ProjectNames'] as $item1) {
                    $model->projectNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ViewType'])) {
            $model->viewType = $map['ViewType'];
        }

        return $model;
    }
}
