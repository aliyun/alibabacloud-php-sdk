<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageColorResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imagerecog\V20190930\Models\RecognizeImageColorResponseBody\data\colorTemplateList;

class data extends Model
{
    /**
     * @var colorTemplateList[]
     */
    public $colorTemplateList;
    protected $_name = [
        'colorTemplateList' => 'ColorTemplateList',
    ];

    public function validate()
    {
        if (\is_array($this->colorTemplateList)) {
            Model::validateArray($this->colorTemplateList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->colorTemplateList) {
            if (\is_array($this->colorTemplateList)) {
                $res['ColorTemplateList'] = [];
                $n1 = 0;
                foreach ($this->colorTemplateList as $item1) {
                    $res['ColorTemplateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ColorTemplateList'])) {
            if (!empty($map['ColorTemplateList'])) {
                $model->colorTemplateList = [];
                $n1 = 0;
                foreach ($map['ColorTemplateList'] as $item1) {
                    $model->colorTemplateList[$n1] = colorTemplateList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
