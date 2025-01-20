<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorityTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorityTemplateResponseBody\authorityTemplateViewList\authorityTemplateView;

class authorityTemplateViewList extends Model
{
    /**
     * @var authorityTemplateView[]
     */
    public $authorityTemplateView;
    protected $_name = [
        'authorityTemplateView' => 'AuthorityTemplateView',
    ];

    public function validate()
    {
        if (\is_array($this->authorityTemplateView)) {
            Model::validateArray($this->authorityTemplateView);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorityTemplateView) {
            if (\is_array($this->authorityTemplateView)) {
                $res['AuthorityTemplateView'] = [];
                $n1                           = 0;
                foreach ($this->authorityTemplateView as $item1) {
                    $res['AuthorityTemplateView'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AuthorityTemplateView'])) {
            if (!empty($map['AuthorityTemplateView'])) {
                $model->authorityTemplateView = [];
                $n1                           = 0;
                foreach ($map['AuthorityTemplateView'] as $item1) {
                    $model->authorityTemplateView[$n1++] = authorityTemplateView::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
