<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListRectifyFlowRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $governItemType;

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
    public $priorityFilters;

    /**
     * @var string[]
     */
    public $rectifyUserFilters;

    /**
     * @var string[]
     */
    public $statusFilters;

    /**
     * @var string[]
     */
    public $verifyUserFilters;
    protected $_name = [
        'governItemType' => 'GovernItemType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'priorityFilters' => 'PriorityFilters',
        'rectifyUserFilters' => 'RectifyUserFilters',
        'statusFilters' => 'StatusFilters',
        'verifyUserFilters' => 'VerifyUserFilters',
    ];

    public function validate()
    {
        if (\is_array($this->priorityFilters)) {
            Model::validateArray($this->priorityFilters);
        }
        if (\is_array($this->rectifyUserFilters)) {
            Model::validateArray($this->rectifyUserFilters);
        }
        if (\is_array($this->statusFilters)) {
            Model::validateArray($this->statusFilters);
        }
        if (\is_array($this->verifyUserFilters)) {
            Model::validateArray($this->verifyUserFilters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->governItemType) {
            $res['GovernItemType'] = $this->governItemType;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->priorityFilters) {
            if (\is_array($this->priorityFilters)) {
                $res['PriorityFilters'] = [];
                $n1 = 0;
                foreach ($this->priorityFilters as $item1) {
                    $res['PriorityFilters'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rectifyUserFilters) {
            if (\is_array($this->rectifyUserFilters)) {
                $res['RectifyUserFilters'] = [];
                $n1 = 0;
                foreach ($this->rectifyUserFilters as $item1) {
                    $res['RectifyUserFilters'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->statusFilters) {
            if (\is_array($this->statusFilters)) {
                $res['StatusFilters'] = [];
                $n1 = 0;
                foreach ($this->statusFilters as $item1) {
                    $res['StatusFilters'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->verifyUserFilters) {
            if (\is_array($this->verifyUserFilters)) {
                $res['VerifyUserFilters'] = [];
                $n1 = 0;
                foreach ($this->verifyUserFilters as $item1) {
                    $res['VerifyUserFilters'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PriorityFilters'])) {
            if (!empty($map['PriorityFilters'])) {
                $model->priorityFilters = [];
                $n1 = 0;
                foreach ($map['PriorityFilters'] as $item1) {
                    $model->priorityFilters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RectifyUserFilters'])) {
            if (!empty($map['RectifyUserFilters'])) {
                $model->rectifyUserFilters = [];
                $n1 = 0;
                foreach ($map['RectifyUserFilters'] as $item1) {
                    $model->rectifyUserFilters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StatusFilters'])) {
            if (!empty($map['StatusFilters'])) {
                $model->statusFilters = [];
                $n1 = 0;
                foreach ($map['StatusFilters'] as $item1) {
                    $model->statusFilters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VerifyUserFilters'])) {
            if (!empty($map['VerifyUserFilters'])) {
                $model->verifyUserFilters = [];
                $n1 = 0;
                foreach ($map['VerifyUserFilters'] as $item1) {
                    $model->verifyUserFilters[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
