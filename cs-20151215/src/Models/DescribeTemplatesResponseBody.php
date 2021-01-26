<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesResponseBody\pageInfo;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesResponseBody\templates;
use AlibabaCloud\Tea\Model;

class DescribeTemplatesResponseBody extends Model
{
    /**
     * @description 模板列表。
     *
     * @var templates
     */
    public $templates;

    /**
     * @description 分页信息。
     *
     * @var pageInfo
     */
    public $pageInfo;
    protected $_name = [
        'templates' => 'templates',
        'pageInfo'  => 'page_info',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templates) {
            $res['templates'] = null !== $this->templates ? $this->templates->toMap() : null;
        }
        if (null !== $this->pageInfo) {
            $res['page_info'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['templates'])) {
            $model->templates = templates::fromMap($map['templates']);
        }
        if (isset($map['page_info'])) {
            $model->pageInfo = pageInfo::fromMap($map['page_info']);
        }

        return $model;
    }
}
