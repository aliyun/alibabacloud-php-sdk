<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeGrantRulesToCenResponseBody\grantRules;
use AlibabaCloud\Tea\Model;

class DescribeGrantRulesToCenResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var grantRules
     */
    public $grantRules;
    protected $_name = [
        'requestId'  => 'RequestId',
        'grantRules' => 'GrantRules',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->grantRules) {
            $res['GrantRules'] = null !== $this->grantRules ? $this->grantRules->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGrantRulesToCenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['GrantRules'])) {
            $model->grantRules = grantRules::fromMap($map['GrantRules']);
        }

        return $model;
    }
}
