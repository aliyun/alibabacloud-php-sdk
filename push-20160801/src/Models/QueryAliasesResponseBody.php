<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\SDK\Push\V20160801\Models\QueryAliasesResponseBody\aliasInfos;
use AlibabaCloud\Tea\Model;

class QueryAliasesResponseBody extends Model
{
    /**
     * @var aliasInfos
     */
    public $aliasInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aliasInfos' => 'AliasInfos',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasInfos) {
            $res['AliasInfos'] = null !== $this->aliasInfos ? $this->aliasInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAliasesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasInfos'])) {
            $model->aliasInfos = aliasInfos::fromMap($map['AliasInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
