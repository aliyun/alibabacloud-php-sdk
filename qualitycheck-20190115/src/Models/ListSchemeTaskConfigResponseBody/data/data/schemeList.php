<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data;

use AlibabaCloud\Tea\Model;

class schemeList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\schemeList\schemeList[]
     */
    public $schemeList;
    protected $_name = [
        'schemeList' => 'SchemeList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->schemeList) {
            $res['SchemeList'] = [];
            if (null !== $this->schemeList && \is_array($this->schemeList)) {
                $n = 0;
                foreach ($this->schemeList as $item) {
                    $res['SchemeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return schemeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SchemeList'])) {
            if (!empty($map['SchemeList'])) {
                $model->schemeList = [];
                $n                 = 0;
                foreach ($map['SchemeList'] as $item) {
                    $model->schemeList[$n++] = null !== $item ? \AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSchemeTaskConfigResponseBody\data\data\schemeList\schemeList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
