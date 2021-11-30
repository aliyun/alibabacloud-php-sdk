<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\GetChainResponseBody\chainConfig\nodes\nodeConfig;

use AlibabaCloud\Tea\Model;

class denyPolicy extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $issueCount;

    /**
     * @var string
     */
    public $issueLevel;

    /**
     * @var string
     */
    public $logic;
    protected $_name = [
        'action'     => 'Action',
        'issueCount' => 'IssueCount',
        'issueLevel' => 'IssueLevel',
        'logic'      => 'Logic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->issueCount) {
            $res['IssueCount'] = $this->issueCount;
        }
        if (null !== $this->issueLevel) {
            $res['IssueLevel'] = $this->issueLevel;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return denyPolicy
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['IssueCount'])) {
            $model->issueCount = $map['IssueCount'];
        }
        if (isset($map['IssueLevel'])) {
            $model->issueLevel = $map['IssueLevel'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }

        return $model;
    }
}
