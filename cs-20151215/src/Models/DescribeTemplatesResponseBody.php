<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesResponseBody\pageInfo;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesResponseBody\templates;
use AlibabaCloud\Tea\Model;

class DescribeTemplatesResponseBody extends Model
{
    /**
     * @description The pagination details.
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description The list of the templates returned .
     *
     * @var templates[]
     */
    public $templates;
    protected $_name = [
        'pageInfo'  => 'page_info',
        'templates' => 'templates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['page_info'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->templates) {
            $res['templates'] = [];
            if (null !== $this->templates && \is_array($this->templates)) {
                $n = 0;
                foreach ($this->templates as $item) {
                    $res['templates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['page_info'])) {
            $model->pageInfo = pageInfo::fromMap($map['page_info']);
        }
        if (isset($map['templates'])) {
            if (!empty($map['templates'])) {
                $model->templates = [];
                $n                = 0;
                foreach ($map['templates'] as $item) {
                    $model->templates[$n++] = null !== $item ? templates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
