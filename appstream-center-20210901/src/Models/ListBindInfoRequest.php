<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListBindInfoRequest extends Model
{
    /**
     * @var string[]
     */
    public $appIdList;

    /**
     * @var string[]
     */
    public $appInstanceGroupIdList;

    /**
     * @var string[]
     */
    public $appInstanceIdList;

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
    public $userIdList;

    /**
     * @var string[]
     */
    public $wyIdList;
    protected $_name = [
        'appIdList' => 'AppIdList',
        'appInstanceGroupIdList' => 'AppInstanceGroupIdList',
        'appInstanceIdList' => 'AppInstanceIdList',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'userIdList' => 'UserIdList',
        'wyIdList' => 'WyIdList',
    ];

    public function validate()
    {
        if (\is_array($this->appIdList)) {
            Model::validateArray($this->appIdList);
        }
        if (\is_array($this->appInstanceGroupIdList)) {
            Model::validateArray($this->appInstanceGroupIdList);
        }
        if (\is_array($this->appInstanceIdList)) {
            Model::validateArray($this->appInstanceIdList);
        }
        if (\is_array($this->userIdList)) {
            Model::validateArray($this->userIdList);
        }
        if (\is_array($this->wyIdList)) {
            Model::validateArray($this->wyIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appIdList) {
            if (\is_array($this->appIdList)) {
                $res['AppIdList'] = [];
                $n1 = 0;
                foreach ($this->appIdList as $item1) {
                    $res['AppIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->appInstanceGroupIdList) {
            if (\is_array($this->appInstanceGroupIdList)) {
                $res['AppInstanceGroupIdList'] = [];
                $n1 = 0;
                foreach ($this->appInstanceGroupIdList as $item1) {
                    $res['AppInstanceGroupIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->appInstanceIdList) {
            if (\is_array($this->appInstanceIdList)) {
                $res['AppInstanceIdList'] = [];
                $n1 = 0;
                foreach ($this->appInstanceIdList as $item1) {
                    $res['AppInstanceIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->userIdList) {
            if (\is_array($this->userIdList)) {
                $res['UserIdList'] = [];
                $n1 = 0;
                foreach ($this->userIdList as $item1) {
                    $res['UserIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->wyIdList) {
            if (\is_array($this->wyIdList)) {
                $res['WyIdList'] = [];
                $n1 = 0;
                foreach ($this->wyIdList as $item1) {
                    $res['WyIdList'][$n1++] = $item1;
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
        if (isset($map['AppIdList'])) {
            if (!empty($map['AppIdList'])) {
                $model->appIdList = [];
                $n1 = 0;
                foreach ($map['AppIdList'] as $item1) {
                    $model->appIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AppInstanceGroupIdList'])) {
            if (!empty($map['AppInstanceGroupIdList'])) {
                $model->appInstanceGroupIdList = [];
                $n1 = 0;
                foreach ($map['AppInstanceGroupIdList'] as $item1) {
                    $model->appInstanceGroupIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AppInstanceIdList'])) {
            if (!empty($map['AppInstanceIdList'])) {
                $model->appInstanceIdList = [];
                $n1 = 0;
                foreach ($map['AppInstanceIdList'] as $item1) {
                    $model->appInstanceIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['UserIdList'])) {
            if (!empty($map['UserIdList'])) {
                $model->userIdList = [];
                $n1 = 0;
                foreach ($map['UserIdList'] as $item1) {
                    $model->userIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['WyIdList'])) {
            if (!empty($map['WyIdList'])) {
                $model->wyIdList = [];
                $n1 = 0;
                foreach ($map['WyIdList'] as $item1) {
                    $model->wyIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
