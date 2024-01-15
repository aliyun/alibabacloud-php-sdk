<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\reviewers;

use AlibabaCloud\Tea\Model;

class reviewer extends Model
{
    /**
     * @example 2337235457340978
     *
     * @var string
     */
    public $reviewerId;

    /**
     * @var string
     */
    public $reviewerName;
    protected $_name = [
        'reviewerId'   => 'ReviewerId',
        'reviewerName' => 'ReviewerName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewerId) {
            $res['ReviewerId'] = $this->reviewerId;
        }
        if (null !== $this->reviewerName) {
            $res['ReviewerName'] = $this->reviewerName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReviewerId'])) {
            $model->reviewerId = $map['ReviewerId'];
        }
        if (isset($map['ReviewerName'])) {
            $model->reviewerName = $map['ReviewerName'];
        }

        return $model;
    }
}
