<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class DescribeClientsRequest extends Model
{
    /**
     * @var string
     */
    public $callerAliUid;

    /**
     * @var int
     */
    public $clientType;

    /**
     * @var string
     */
    public $customResourceId;

    /**
     * @var bool
     */
    public $customResourceStatus;

    /**
     * @var bool
     */
    public $inManage;

    /**
     * @var bool
     */
    public $includeSubGroups;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var bool
     */
    public $onlineStatus;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $searchKeyword;

    /**
     * @var string
     */
    public $terminalGroupId;

    /**
     * @var string[]
     */
    public $uuids;

    /**
     * @var bool
     */
    public $withBindUser;
    protected $_name = [
        'callerAliUid' => 'CallerAliUid',
        'clientType' => 'ClientType',
        'customResourceId' => 'CustomResourceId',
        'customResourceStatus' => 'CustomResourceStatus',
        'inManage' => 'InManage',
        'includeSubGroups' => 'IncludeSubGroups',
        'maxResults' => 'MaxResults',
        'model' => 'Model',
        'nextToken' => 'NextToken',
        'onlineStatus' => 'OnlineStatus',
        'platform' => 'Platform',
        'searchKeyword' => 'SearchKeyword',
        'terminalGroupId' => 'TerminalGroupId',
        'uuids' => 'Uuids',
        'withBindUser' => 'WithBindUser',
    ];

    public function validate()
    {
        if (\is_array($this->uuids)) {
            Model::validateArray($this->uuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callerAliUid) {
            $res['CallerAliUid'] = $this->callerAliUid;
        }

        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        if (null !== $this->customResourceId) {
            $res['CustomResourceId'] = $this->customResourceId;
        }

        if (null !== $this->customResourceStatus) {
            $res['CustomResourceStatus'] = $this->customResourceStatus;
        }

        if (null !== $this->inManage) {
            $res['InManage'] = $this->inManage;
        }

        if (null !== $this->includeSubGroups) {
            $res['IncludeSubGroups'] = $this->includeSubGroups;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->searchKeyword) {
            $res['SearchKeyword'] = $this->searchKeyword;
        }

        if (null !== $this->terminalGroupId) {
            $res['TerminalGroupId'] = $this->terminalGroupId;
        }

        if (null !== $this->uuids) {
            if (\is_array($this->uuids)) {
                $res['Uuids'] = [];
                $n1 = 0;
                foreach ($this->uuids as $item1) {
                    $res['Uuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->withBindUser) {
            $res['WithBindUser'] = $this->withBindUser;
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
        if (isset($map['CallerAliUid'])) {
            $model->callerAliUid = $map['CallerAliUid'];
        }

        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        if (isset($map['CustomResourceId'])) {
            $model->customResourceId = $map['CustomResourceId'];
        }

        if (isset($map['CustomResourceStatus'])) {
            $model->customResourceStatus = $map['CustomResourceStatus'];
        }

        if (isset($map['InManage'])) {
            $model->inManage = $map['InManage'];
        }

        if (isset($map['IncludeSubGroups'])) {
            $model->includeSubGroups = $map['IncludeSubGroups'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['SearchKeyword'])) {
            $model->searchKeyword = $map['SearchKeyword'];
        }

        if (isset($map['TerminalGroupId'])) {
            $model->terminalGroupId = $map['TerminalGroupId'];
        }

        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = [];
                $n1 = 0;
                foreach ($map['Uuids'] as $item1) {
                    $model->uuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WithBindUser'])) {
            $model->withBindUser = $map['WithBindUser'];
        }

        return $model;
    }
}
