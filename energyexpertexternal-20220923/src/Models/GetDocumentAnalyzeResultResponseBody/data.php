<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultResponseBody;

use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetDocumentAnalyzeResultResponseBody\data\kvListInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var kvListInfo[]
     */
    public $kvListInfo;
    protected $_name = [
        'kvListInfo' => 'kvListInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kvListInfo) {
            $res['kvListInfo'] = [];
            if (null !== $this->kvListInfo && \is_array($this->kvListInfo)) {
                $n = 0;
                foreach ($this->kvListInfo as $item) {
                    $res['kvListInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['kvListInfo'])) {
            if (!empty($map['kvListInfo'])) {
                $model->kvListInfo = [];
                $n                 = 0;
                foreach ($map['kvListInfo'] as $item) {
                    $model->kvListInfo[$n++] = null !== $item ? kvListInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
