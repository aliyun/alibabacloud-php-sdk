<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\reviewers;

use AlibabaCloud\Tea\Model;

class reviewer extends Model
{
    /**
     * @var string
     */
    public $reviewerName;

    /**
     * @var string
     */
    public $reviewerId;
    protected $_name = [
        'reviewerName' => 'ReviewerName',
        'reviewerId'   => 'ReviewerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewerName) {
            $res['ReviewerName'] = $this->reviewerName;
        }
        if (null !== $this->reviewerId) {
            $res['ReviewerId'] = $this->reviewerId;
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
        if (isset($map['ReviewerName'])) {
            $model->reviewerName = $map['ReviewerName'];
        }
        if (isset($map['ReviewerId'])) {
            $model->reviewerId = $map['ReviewerId'];
        }

        return $model;
    }
}
