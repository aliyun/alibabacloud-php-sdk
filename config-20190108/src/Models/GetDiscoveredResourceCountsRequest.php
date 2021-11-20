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
     * @var int
     */
    public $memberId;

    /**
     * @var bool
     */
    public $multiAccount;
    protected $_name = [
        'groupByKey'   => 'GroupByKey',
        'memberId'     => 'MemberId',
        'multiAccount' => 'MultiAccount',
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
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->multiAccount) {
            $res['MultiAccount'] = $this->multiAccount;
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
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['MultiAccount'])) {
            $model->multiAccount = $map['MultiAccount'];
        }

        return $model;
    }
}
