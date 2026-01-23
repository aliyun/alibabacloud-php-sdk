<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListQualityTemplatesRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string[]
     */
    public $catalogList;

    /**
     * @var bool
     */
    public $currentUserOwned;

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
     * @var string[]
     */
    public $supportDataSourceTypeList;

    /**
     * @var string[]
     */
    public $templateOwnerList;

    /**
     * @var string[]
     */
    public $templateSourceList;

    /**
     * @var string[]
     */
    public $templateTypeList;

    /**
     * @var string[]
     */
    public $watchTypeList;
    protected $_name = [
        'catalogList' => 'CatalogList',
        'currentUserOwned' => 'CurrentUserOwned',
        'keyword' => 'Keyword',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'supportDataSourceTypeList' => 'SupportDataSourceTypeList',
        'templateOwnerList' => 'TemplateOwnerList',
        'templateSourceList' => 'TemplateSourceList',
        'templateTypeList' => 'TemplateTypeList',
        'watchTypeList' => 'WatchTypeList',
    ];

    public function validate()
    {
        if (\is_array($this->catalogList)) {
            Model::validateArray($this->catalogList);
        }
        if (\is_array($this->supportDataSourceTypeList)) {
            Model::validateArray($this->supportDataSourceTypeList);
        }
        if (\is_array($this->templateOwnerList)) {
            Model::validateArray($this->templateOwnerList);
        }
        if (\is_array($this->templateSourceList)) {
            Model::validateArray($this->templateSourceList);
        }
        if (\is_array($this->templateTypeList)) {
            Model::validateArray($this->templateTypeList);
        }
        if (\is_array($this->watchTypeList)) {
            Model::validateArray($this->watchTypeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogList) {
            if (\is_array($this->catalogList)) {
                $res['CatalogList'] = [];
                $n1 = 0;
                foreach ($this->catalogList as $item1) {
                    $res['CatalogList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->currentUserOwned) {
            $res['CurrentUserOwned'] = $this->currentUserOwned;
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

        if (null !== $this->supportDataSourceTypeList) {
            if (\is_array($this->supportDataSourceTypeList)) {
                $res['SupportDataSourceTypeList'] = [];
                $n1 = 0;
                foreach ($this->supportDataSourceTypeList as $item1) {
                    $res['SupportDataSourceTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateOwnerList) {
            if (\is_array($this->templateOwnerList)) {
                $res['TemplateOwnerList'] = [];
                $n1 = 0;
                foreach ($this->templateOwnerList as $item1) {
                    $res['TemplateOwnerList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateSourceList) {
            if (\is_array($this->templateSourceList)) {
                $res['TemplateSourceList'] = [];
                $n1 = 0;
                foreach ($this->templateSourceList as $item1) {
                    $res['TemplateSourceList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->templateTypeList) {
            if (\is_array($this->templateTypeList)) {
                $res['TemplateTypeList'] = [];
                $n1 = 0;
                foreach ($this->templateTypeList as $item1) {
                    $res['TemplateTypeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->watchTypeList) {
            if (\is_array($this->watchTypeList)) {
                $res['WatchTypeList'] = [];
                $n1 = 0;
                foreach ($this->watchTypeList as $item1) {
                    $res['WatchTypeList'][$n1] = $item1;
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
        if (isset($map['CatalogList'])) {
            if (!empty($map['CatalogList'])) {
                $model->catalogList = [];
                $n1 = 0;
                foreach ($map['CatalogList'] as $item1) {
                    $model->catalogList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CurrentUserOwned'])) {
            $model->currentUserOwned = $map['CurrentUserOwned'];
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

        if (isset($map['SupportDataSourceTypeList'])) {
            if (!empty($map['SupportDataSourceTypeList'])) {
                $model->supportDataSourceTypeList = [];
                $n1 = 0;
                foreach ($map['SupportDataSourceTypeList'] as $item1) {
                    $model->supportDataSourceTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateOwnerList'])) {
            if (!empty($map['TemplateOwnerList'])) {
                $model->templateOwnerList = [];
                $n1 = 0;
                foreach ($map['TemplateOwnerList'] as $item1) {
                    $model->templateOwnerList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateSourceList'])) {
            if (!empty($map['TemplateSourceList'])) {
                $model->templateSourceList = [];
                $n1 = 0;
                foreach ($map['TemplateSourceList'] as $item1) {
                    $model->templateSourceList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TemplateTypeList'])) {
            if (!empty($map['TemplateTypeList'])) {
                $model->templateTypeList = [];
                $n1 = 0;
                foreach ($map['TemplateTypeList'] as $item1) {
                    $model->templateTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WatchTypeList'])) {
            if (!empty($map['WatchTypeList'])) {
                $model->watchTypeList = [];
                $n1 = 0;
                foreach ($map['WatchTypeList'] as $item1) {
                    $model->watchTypeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
