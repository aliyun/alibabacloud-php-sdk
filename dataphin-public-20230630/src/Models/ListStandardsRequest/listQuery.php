<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListStandardsRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $directory;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int[]
     */
    public $standardSetIdList;

    /**
     * @var string
     */
    public $standardStage;

    /**
     * @var string[]
     */
    public $standardStatusList;

    /**
     * @var int[]
     */
    public $standardTemplateIdList;

    /**
     * @var string[]
     */
    public $standardTypeList;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'directory' => 'Directory',
        'keyword' => 'Keyword',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'standardSetIdList' => 'StandardSetIdList',
        'standardStage' => 'StandardStage',
        'standardStatusList' => 'StandardStatusList',
        'standardTemplateIdList' => 'StandardTemplateIdList',
        'standardTypeList' => 'StandardTypeList',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->standardSetIdList)) {
            Model::validateArray($this->standardSetIdList);
        }
        if (\is_array($this->standardStatusList)) {
            Model::validateArray($this->standardStatusList);
        }
        if (\is_array($this->standardTemplateIdList)) {
            Model::validateArray($this->standardTemplateIdList);
        }
        if (\is_array($this->standardTypeList)) {
            Model::validateArray($this->standardTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->directory) {
            $res['Directory'] = $this->directory;
        }

        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->standardSetIdList) {
            if (\is_array($this->standardSetIdList)) {
                $res['StandardSetIdList'] = [];
                $n1 = 0;
                foreach ($this->standardSetIdList as $item1) {
                    $res['StandardSetIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standardStage) {
            $res['StandardStage'] = $this->standardStage;
        }

        if (null !== $this->standardStatusList) {
            if (\is_array($this->standardStatusList)) {
                $res['StandardStatusList'] = [];
                $n1 = 0;
                foreach ($this->standardStatusList as $item1) {
                    $res['StandardStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standardTemplateIdList) {
            if (\is_array($this->standardTemplateIdList)) {
                $res['StandardTemplateIdList'] = [];
                $n1 = 0;
                foreach ($this->standardTemplateIdList as $item1) {
                    $res['StandardTemplateIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->standardTypeList) {
            if (\is_array($this->standardTypeList)) {
                $res['StandardTypeList'] = [];
                $n1 = 0;
                foreach ($this->standardTypeList as $item1) {
                    $res['StandardTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Directory'])) {
            $model->directory = $map['Directory'];
        }

        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StandardSetIdList'])) {
            if (!empty($map['StandardSetIdList'])) {
                $model->standardSetIdList = [];
                $n1 = 0;
                foreach ($map['StandardSetIdList'] as $item1) {
                    $model->standardSetIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StandardStage'])) {
            $model->standardStage = $map['StandardStage'];
        }

        if (isset($map['StandardStatusList'])) {
            if (!empty($map['StandardStatusList'])) {
                $model->standardStatusList = [];
                $n1 = 0;
                foreach ($map['StandardStatusList'] as $item1) {
                    $model->standardStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StandardTemplateIdList'])) {
            if (!empty($map['StandardTemplateIdList'])) {
                $model->standardTemplateIdList = [];
                $n1 = 0;
                foreach ($map['StandardTemplateIdList'] as $item1) {
                    $model->standardTemplateIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['StandardTypeList'])) {
            if (!empty($map['StandardTypeList'])) {
                $model->standardTypeList = [];
                $n1 = 0;
                foreach ($map['StandardTypeList'] as $item1) {
                    $model->standardTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
