<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models;

use AlibabaCloud\Tea\Model;

class GetDiscoveredResourceCountsRequest extends Model
{
    /**
     * @var string
     */
    public $groupByKey;

    /**
     * @var bool
     */
    public $multiAccount;

    /**
     * @var int
     */
    public $memberId;
    protected $_name = [
        'groupByKey'   => 'GroupByKey',
        'multiAccount' => 'MultiAccount',
        'memberId'     => 'MemberId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupByKey) {
            $res['GroupByKey'] = $this->groupByKey;
        }
        if (null !== $this->multiAccount) {
            $res['MultiAccount'] = $this->multiAccount;
        }
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDiscoveredResourceCountsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupByKey'])) {
            $model->groupByKey = $map['GroupByKey'];
        }
        if (isset($map['MultiAccount'])) {
            $model->multiAccount = $map['MultiAccount'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }

        return $model;
    }
}
