<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListAppTemplatesResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\ListAppTemplatesResponseBody\result\appTemplateInfoList;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description 总条目数
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description 总页数
     *
     * @var int
     */
    public $pageTotal;

    /**
     * @description 应用模板信息列表
     *
     * @var appTemplateInfoList[]
     */
    public $appTemplateInfoList;
    protected $_name = [
        'totalCount'          => 'TotalCount',
        'pageTotal'           => 'PageTotal',
        'appTemplateInfoList' => 'AppTemplateInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageTotal) {
            $res['PageTotal'] = $this->pageTotal;
        }
        if (null !== $this->appTemplateInfoList) {
            $res['AppTemplateInfoList'] = [];
            if (null !== $this->appTemplateInfoList && \is_array($this->appTemplateInfoList)) {
                $n = 0;
                foreach ($this->appTemplateInfoList as $item) {
                    $res['AppTemplateInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageTotal'])) {
            $model->pageTotal = $map['PageTotal'];
        }
        if (isset($map['AppTemplateInfoList'])) {
            if (!empty($map['AppTemplateInfoList'])) {
                $model->appTemplateInfoList = [];
                $n                          = 0;
                foreach ($map['AppTemplateInfoList'] as $item) {
                    $model->appTemplateInfoList[$n++] = null !== $item ? appTemplateInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
