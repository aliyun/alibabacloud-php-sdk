<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListApprovalProcessesRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $policyId;
    /**
     * @var string
     */
    public $policyType;
    /**
     * @var string[]
     */
    public $processIds;
    /**
     * @var string
     */
    public $processName;
    /**
     * @var string
     */
    public $saseUserId;
    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'policyId'    => 'PolicyId',
        'policyType'  => 'PolicyType',
        'processIds'  => 'ProcessIds',
        'processName' => 'ProcessName',
        'saseUserId'  => 'SaseUserId',
        'username'    => 'Username',
    ];

    public function validate()
    {
        if (\is_array($this->processIds)) {
            Model::validateArray($this->processIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyType) {
            $res['PolicyType'] = $this->policyType;
        }

        if (null !== $this->processIds) {
            if (\is_array($this->processIds)) {
                $res['ProcessIds'] = [];
                $n1                = 0;
                foreach ($this->processIds as $item1) {
                    $res['ProcessIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
        }

        if (null !== $this->saseUserId) {
            $res['SaseUserId'] = $this->saseUserId;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyType'])) {
            $model->policyType = $map['PolicyType'];
        }

        if (isset($map['ProcessIds'])) {
            if (!empty($map['ProcessIds'])) {
                $model->processIds = [];
                $n1                = 0;
                foreach ($map['ProcessIds'] as $item1) {
                    $model->processIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        if (isset($map['SaseUserId'])) {
            $model->saseUserId = $map['SaseUserId'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
