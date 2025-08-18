<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListPublishRecordsRequest\listQuery;

use AlibabaCloud\Dara\Model;

class searchFilter extends Model
{
    /**
     * @var int[]
     */
    public $changeTypeList;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int[]
     */
    public $projectIdList;

    /**
     * @var string
     */
    public $publishEndTime;

    /**
     * @var string
     */
    public $publishStartTime;

    /**
     * @var int[]
     */
    public $publishStatusList;

    /**
     * @var string[]
     */
    public $submitterList;
    protected $_name = [
        'changeTypeList' => 'ChangeTypeList',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'projectIdList' => 'ProjectIdList',
        'publishEndTime' => 'PublishEndTime',
        'publishStartTime' => 'PublishStartTime',
        'publishStatusList' => 'PublishStatusList',
        'submitterList' => 'SubmitterList',
    ];

    public function validate()
    {
        if (\is_array($this->changeTypeList)) {
            Model::validateArray($this->changeTypeList);
        }
        if (\is_array($this->projectIdList)) {
            Model::validateArray($this->projectIdList);
        }
        if (\is_array($this->publishStatusList)) {
            Model::validateArray($this->publishStatusList);
        }
        if (\is_array($this->submitterList)) {
            Model::validateArray($this->submitterList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeTypeList) {
            if (\is_array($this->changeTypeList)) {
                $res['ChangeTypeList'] = [];
                $n1 = 0;
                foreach ($this->changeTypeList as $item1) {
                    $res['ChangeTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->projectIdList) {
            if (\is_array($this->projectIdList)) {
                $res['ProjectIdList'] = [];
                $n1 = 0;
                foreach ($this->projectIdList as $item1) {
                    $res['ProjectIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publishEndTime) {
            $res['PublishEndTime'] = $this->publishEndTime;
        }

        if (null !== $this->publishStartTime) {
            $res['PublishStartTime'] = $this->publishStartTime;
        }

        if (null !== $this->publishStatusList) {
            if (\is_array($this->publishStatusList)) {
                $res['PublishStatusList'] = [];
                $n1 = 0;
                foreach ($this->publishStatusList as $item1) {
                    $res['PublishStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->submitterList) {
            if (\is_array($this->submitterList)) {
                $res['SubmitterList'] = [];
                $n1 = 0;
                foreach ($this->submitterList as $item1) {
                    $res['SubmitterList'][$n1] = $item1;
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
        if (isset($map['ChangeTypeList'])) {
            if (!empty($map['ChangeTypeList'])) {
                $model->changeTypeList = [];
                $n1 = 0;
                foreach ($map['ChangeTypeList'] as $item1) {
                    $model->changeTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProjectIdList'])) {
            if (!empty($map['ProjectIdList'])) {
                $model->projectIdList = [];
                $n1 = 0;
                foreach ($map['ProjectIdList'] as $item1) {
                    $model->projectIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PublishEndTime'])) {
            $model->publishEndTime = $map['PublishEndTime'];
        }

        if (isset($map['PublishStartTime'])) {
            $model->publishStartTime = $map['PublishStartTime'];
        }

        if (isset($map['PublishStatusList'])) {
            if (!empty($map['PublishStatusList'])) {
                $model->publishStatusList = [];
                $n1 = 0;
                foreach ($map['PublishStatusList'] as $item1) {
                    $model->publishStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SubmitterList'])) {
            if (!empty($map['SubmitterList'])) {
                $model->submitterList = [];
                $n1 = 0;
                foreach ($map['SubmitterList'] as $item1) {
                    $model->submitterList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
