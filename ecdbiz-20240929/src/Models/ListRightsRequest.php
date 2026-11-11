<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EcdBiz\V20240929\Models;

use AlibabaCloud\Dara\Model;

class ListRightsRequest extends Model
{
    /**
     * @var bool
     */
    public $aiDesktop;

    /**
     * @var string
     */
    public $businessSceneCode;

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
    public $orderField;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var int
     */
    public $overseas;

    /**
     * @var string
     */
    public $rightsActiveStatus;

    /**
     * @var string
     */
    public $rightsAssignedUser;

    /**
     * @var string[]
     */
    public $rightsIds;

    /**
     * @var string
     */
    public $rightsPeriod;

    /**
     * @var string
     */
    public $rightsResourceId;

    /**
     * @var string
     */
    public $rightsResourceType;

    /**
     * @var string[]
     */
    public $rightsResourceTypes;

    /**
     * @var string
     */
    public $rightsSpec;
    protected $_name = [
        'aiDesktop' => 'AiDesktop',
        'businessSceneCode' => 'BusinessSceneCode',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderField' => 'OrderField',
        'orderType' => 'OrderType',
        'overseas' => 'Overseas',
        'rightsActiveStatus' => 'RightsActiveStatus',
        'rightsAssignedUser' => 'RightsAssignedUser',
        'rightsIds' => 'RightsIds',
        'rightsPeriod' => 'RightsPeriod',
        'rightsResourceId' => 'RightsResourceId',
        'rightsResourceType' => 'RightsResourceType',
        'rightsResourceTypes' => 'RightsResourceTypes',
        'rightsSpec' => 'RightsSpec',
    ];

    public function validate()
    {
        if (\is_array($this->rightsIds)) {
            Model::validateArray($this->rightsIds);
        }
        if (\is_array($this->rightsResourceTypes)) {
            Model::validateArray($this->rightsResourceTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiDesktop) {
            $res['AiDesktop'] = $this->aiDesktop;
        }

        if (null !== $this->businessSceneCode) {
            $res['BusinessSceneCode'] = $this->businessSceneCode;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->orderField) {
            $res['OrderField'] = $this->orderField;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->overseas) {
            $res['Overseas'] = $this->overseas;
        }

        if (null !== $this->rightsActiveStatus) {
            $res['RightsActiveStatus'] = $this->rightsActiveStatus;
        }

        if (null !== $this->rightsAssignedUser) {
            $res['RightsAssignedUser'] = $this->rightsAssignedUser;
        }

        if (null !== $this->rightsIds) {
            if (\is_array($this->rightsIds)) {
                $res['RightsIds'] = [];
                $n1 = 0;
                foreach ($this->rightsIds as $item1) {
                    $res['RightsIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rightsPeriod) {
            $res['RightsPeriod'] = $this->rightsPeriod;
        }

        if (null !== $this->rightsResourceId) {
            $res['RightsResourceId'] = $this->rightsResourceId;
        }

        if (null !== $this->rightsResourceType) {
            $res['RightsResourceType'] = $this->rightsResourceType;
        }

        if (null !== $this->rightsResourceTypes) {
            if (\is_array($this->rightsResourceTypes)) {
                $res['RightsResourceTypes'] = [];
                $n1 = 0;
                foreach ($this->rightsResourceTypes as $item1) {
                    $res['RightsResourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rightsSpec) {
            $res['RightsSpec'] = $this->rightsSpec;
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
        if (isset($map['AiDesktop'])) {
            $model->aiDesktop = $map['AiDesktop'];
        }

        if (isset($map['BusinessSceneCode'])) {
            $model->businessSceneCode = $map['BusinessSceneCode'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OrderField'])) {
            $model->orderField = $map['OrderField'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['Overseas'])) {
            $model->overseas = $map['Overseas'];
        }

        if (isset($map['RightsActiveStatus'])) {
            $model->rightsActiveStatus = $map['RightsActiveStatus'];
        }

        if (isset($map['RightsAssignedUser'])) {
            $model->rightsAssignedUser = $map['RightsAssignedUser'];
        }

        if (isset($map['RightsIds'])) {
            if (!empty($map['RightsIds'])) {
                $model->rightsIds = [];
                $n1 = 0;
                foreach ($map['RightsIds'] as $item1) {
                    $model->rightsIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RightsPeriod'])) {
            $model->rightsPeriod = $map['RightsPeriod'];
        }

        if (isset($map['RightsResourceId'])) {
            $model->rightsResourceId = $map['RightsResourceId'];
        }

        if (isset($map['RightsResourceType'])) {
            $model->rightsResourceType = $map['RightsResourceType'];
        }

        if (isset($map['RightsResourceTypes'])) {
            if (!empty($map['RightsResourceTypes'])) {
                $model->rightsResourceTypes = [];
                $n1 = 0;
                foreach ($map['RightsResourceTypes'] as $item1) {
                    $model->rightsResourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RightsSpec'])) {
            $model->rightsSpec = $map['RightsSpec'];
        }

        return $model;
    }
}
