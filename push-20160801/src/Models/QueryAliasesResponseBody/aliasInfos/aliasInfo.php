<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\QueryAliasesResponseBody\aliasInfos;

use AlibabaCloud\Tea\Model;

class aliasInfo extends Model
{
    /**
     * @example test_alias1
     *
     * @var string
     */
    public $aliasName;
    protected $_name = [
        'aliasName' => 'AliasName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasName) {
            $res['AliasName'] = $this->aliasName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return aliasInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasName'])) {
            $model->aliasName = $map['AliasName'];
        }

        return $model;
    }
}
