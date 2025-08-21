<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryAliasesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryAliasesResponseBody\aliasInfos\aliasInfo;

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
        if (\is_array($this->aliasInfo)) {
            Model::validateArray($this->aliasInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasInfo) {
            if (\is_array($this->aliasInfo)) {
                $res['AliasInfo'] = [];
                $n1 = 0;
                foreach ($this->aliasInfo as $item1) {
                    $res['AliasInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AliasInfo'])) {
            if (!empty($map['AliasInfo'])) {
                $model->aliasInfo = [];
                $n1 = 0;
                foreach ($map['AliasInfo'] as $item1) {
                    $model->aliasInfo[$n1] = aliasInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
