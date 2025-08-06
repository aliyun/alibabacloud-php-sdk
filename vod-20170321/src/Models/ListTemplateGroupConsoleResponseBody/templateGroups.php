<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListTemplateGroupConsoleResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\ListTemplateGroupConsoleResponseBody\templateGroups\templateGroup;

class templateGroups extends Model
{
    /**
     * @var templateGroup[]
     */
    public $templateGroup;
    protected $_name = [
        'templateGroup' => 'TemplateGroup',
    ];

    public function validate()
    {
        if (\is_array($this->templateGroup)) {
            Model::validateArray($this->templateGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateGroup) {
            if (\is_array($this->templateGroup)) {
                $res['TemplateGroup'] = [];
                $n1 = 0;
                foreach ($this->templateGroup as $item1) {
                    $res['TemplateGroup'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TemplateGroup'])) {
            if (!empty($map['TemplateGroup'])) {
                $model->templateGroup = [];
                $n1 = 0;
                foreach ($map['TemplateGroup'] as $item1) {
                    $model->templateGroup[$n1] = templateGroup::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
