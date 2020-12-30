<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryAliasesResponseBody;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryAliasesResponseBody\aliasInfos\aliasInfo;
use AlibabaCloud\Tea\Model;

class aliasInfos extends Model
{
    /**
     * @var aliasInfo[]
     */
    public $aliasInfo;
    protected $_name = [
        'aliasInfo' => 'AliasInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasInfo) {
            $res['AliasInfo'] = [];
            if (null !== $this->aliasInfo && \is_array($this->aliasInfo)) {
                $n = 0;
                foreach ($this->aliasInfo as $item) {
                    $res['AliasInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aliasInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasInfo'])) {
            if (!empty($map['AliasInfo'])) {
                $model->aliasInfo = [];
                $n                = 0;
                foreach ($map['AliasInfo'] as $item) {
                    $model->aliasInfo[$n++] = null !== $item ? aliasInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
