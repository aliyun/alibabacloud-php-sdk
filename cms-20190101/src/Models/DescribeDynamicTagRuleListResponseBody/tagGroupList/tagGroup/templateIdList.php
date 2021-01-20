<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeDynamicTagRuleListResponseBody\tagGroupList\tagGroup;

use AlibabaCloud\Tea\Model;

class templateIdList extends Model
{
    /**
     * @var string[]
     */
    public $templateIdList;
    protected $_name = [
        'templateIdList' => 'TemplateIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateIdList) {
            $res['TemplateIdList'] = $this->templateIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateIdList'])) {
            if (!empty($map['TemplateIdList'])) {
                $model->templateIdList = $map['TemplateIdList'];
            }
        }

        return $model;
    }
}
