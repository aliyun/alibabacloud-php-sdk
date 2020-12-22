<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeTemplatesRequest extends Model
{
    /**
     * @description 模板类型，部署模板类型，目前一共有2种类型，取值为：kubernetes或compose。
     *
     * @var string
     */
    public $templateType;

    /**
     * @description 对查询结果进行分页处理，指定返回第几页的数据。  默认值为 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description 对查询结果进行分页处理，指定每页包含的数据条数。  默认值为 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'templateType' => 'template_type',
        'pageNum'      => 'page_num',
        'pageSize'     => 'page_size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateType) {
            $res['template_type'] = $this->templateType;
        }
        if (null !== $this->pageNum) {
            $res['page_num'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['template_type'])) {
            $model->templateType = $map['template_type'];
        }
        if (isset($map['page_num'])) {
            $model->pageNum = $map['page_num'];
        }
        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        return $model;
    }
}
