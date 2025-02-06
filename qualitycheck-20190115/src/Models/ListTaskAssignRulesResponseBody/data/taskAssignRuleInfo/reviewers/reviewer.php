<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListTaskAssignRulesResponseBody\data\taskAssignRuleInfo\reviewers;

use AlibabaCloud\Dara\Model;

class reviewer extends Model
{
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
