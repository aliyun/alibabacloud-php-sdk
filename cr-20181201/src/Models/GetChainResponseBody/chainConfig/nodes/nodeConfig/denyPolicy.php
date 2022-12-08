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
    public $baselineList;

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
    public $issueList;

    /**
     * @var string
     */
    public $logic;

    /**
     * @var string
     */
    public $maliciousList;
    protected $_name = [
        'action'        => 'Action',
        'baselineList'  => 'BaselineList',
        'issueCount'    => 'IssueCount',
        'issueLevel'    => 'IssueLevel',
        'issueList'     => 'IssueList',
        'logic'         => 'Logic',
        'maliciousList' => 'MaliciousList',
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
        if (null !== $this->baselineList) {
            $res['BaselineList'] = $this->baselineList;
        }
        if (null !== $this->issueCount) {
            $res['IssueCount'] = $this->issueCount;
        }
        if (null !== $this->issueLevel) {
            $res['IssueLevel'] = $this->issueLevel;
        }
        if (null !== $this->issueList) {
            $res['IssueList'] = $this->issueList;
        }
        if (null !== $this->logic) {
            $res['Logic'] = $this->logic;
        }
        if (null !== $this->maliciousList) {
            $res['MaliciousList'] = $this->maliciousList;
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
        if (isset($map['BaselineList'])) {
            $model->baselineList = $map['BaselineList'];
        }
        if (isset($map['IssueCount'])) {
            $model->issueCount = $map['IssueCount'];
        }
        if (isset($map['IssueLevel'])) {
            $model->issueLevel = $map['IssueLevel'];
        }
        if (isset($map['IssueList'])) {
            $model->issueList = $map['IssueList'];
        }
        if (isset($map['Logic'])) {
            $model->logic = $map['Logic'];
        }
        if (isset($map['MaliciousList'])) {
            $model->maliciousList = $map['MaliciousList'];
        }

        return $model;
    }
}
