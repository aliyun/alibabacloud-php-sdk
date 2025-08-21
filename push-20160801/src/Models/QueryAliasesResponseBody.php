<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\QueryAliasesResponseBody\aliasInfos;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->aliasInfos) {
            $this->aliasInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliasInfos) {
            $res['AliasInfos'] = null !== $this->aliasInfos ? $this->aliasInfos->toArray($noStream) : $this->aliasInfos;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AliasInfos'])) {
            $model->aliasInfos = aliasInfos::fromMap($map['AliasInfos']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
