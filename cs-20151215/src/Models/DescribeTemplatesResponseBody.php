<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesResponseBody\pageInfo;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeTemplatesResponseBody\templates;

class DescribeTemplatesResponseBody extends Model
{
    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var templates[]
     */
    public $templates;
    protected $_name = [
        'pageInfo' => 'page_info',
        'templates' => 'templates',
    ];

    public function validate()
    {
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        if (\is_array($this->templates)) {
            Model::validateArray($this->templates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageInfo) {
            $res['page_info'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->templates) {
            if (\is_array($this->templates)) {
                $res['templates'] = [];
                $n1 = 0;
                foreach ($this->templates as $item1) {
                    $res['templates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['page_info'])) {
            $model->pageInfo = pageInfo::fromMap($map['page_info']);
        }

        if (isset($map['templates'])) {
            if (!empty($map['templates'])) {
                $model->templates = [];
                $n1 = 0;
                foreach ($map['templates'] as $item1) {
                    $model->templates[$n1] = templates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
