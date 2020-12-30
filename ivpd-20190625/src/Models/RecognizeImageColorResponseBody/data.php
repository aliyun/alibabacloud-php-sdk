<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\RecognizeImageColorResponseBody;

use AlibabaCloud\SDK\Ivpd\V20190625\Models\RecognizeImageColorResponseBody\data\colorTemplateList;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->colorTemplateList) {
            $res['ColorTemplateList'] = [];
            if (null !== $this->colorTemplateList && \is_array($this->colorTemplateList)) {
                $n = 0;
                foreach ($this->colorTemplateList as $item) {
                    $res['ColorTemplateList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColorTemplateList'])) {
            if (!empty($map['ColorTemplateList'])) {
                $model->colorTemplateList = [];
                $n                        = 0;
                foreach ($map['ColorTemplateList'] as $item) {
                    $model->colorTemplateList[$n++] = null !== $item ? colorTemplateList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
