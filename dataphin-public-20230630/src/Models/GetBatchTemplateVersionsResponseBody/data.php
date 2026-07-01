<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTemplateVersionsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTemplateVersionsResponseBody\data\templateVersionList;

class data extends Model
{
    /**
     * @var templateVersionList[]
     */
    public $templateVersionList;
    protected $_name = [
        'templateVersionList' => 'TemplateVersionList',
    ];

    public function validate()
    {
        if (\is_array($this->templateVersionList)) {
            Model::validateArray($this->templateVersionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->templateVersionList) {
            if (\is_array($this->templateVersionList)) {
                $res['TemplateVersionList'] = [];
                $n1 = 0;
                foreach ($this->templateVersionList as $item1) {
                    $res['TemplateVersionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TemplateVersionList'])) {
            if (!empty($map['TemplateVersionList'])) {
                $model->templateVersionList = [];
                $n1 = 0;
                foreach ($map['TemplateVersionList'] as $item1) {
                    $model->templateVersionList[$n1] = templateVersionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
