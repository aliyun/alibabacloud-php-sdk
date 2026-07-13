<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Dara\Model;

class ListProtectionPoliciesRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $protectionPolicyId;

    /**
     * @var string
     */
    public $protectionPolicyRegionId;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'protectionPolicyId' => 'ProtectionPolicyId',
        'protectionPolicyRegionId' => 'ProtectionPolicyRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->protectionPolicyId) {
            $res['ProtectionPolicyId'] = $this->protectionPolicyId;
        }

        if (null !== $this->protectionPolicyRegionId) {
            $res['ProtectionPolicyRegionId'] = $this->protectionPolicyRegionId;
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ProtectionPolicyId'])) {
            $model->protectionPolicyId = $map['ProtectionPolicyId'];
        }

        if (isset($map['ProtectionPolicyRegionId'])) {
            $model->protectionPolicyRegionId = $map['ProtectionPolicyRegionId'];
        }

        return $model;
    }
}
