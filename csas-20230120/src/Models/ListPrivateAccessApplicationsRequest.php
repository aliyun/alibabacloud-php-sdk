<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class ListPrivateAccessApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $accessModes;
    /**
     * @var string
     */
    public $address;
    /**
     * @var string[]
     */
    public $applicationIds;
    /**
     * @var string
     */
    public $connectorId;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var string
     */
    public $name;
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
    public $status;
    /**
     * @var string
     */
    public $tagId;
    protected $_name = [
        'accessModes'    => 'AccessModes',
        'address'        => 'Address',
        'applicationIds' => 'ApplicationIds',
        'connectorId'    => 'ConnectorId',
        'currentPage'    => 'CurrentPage',
        'name'           => 'Name',
        'pageSize'       => 'PageSize',
        'policyId'       => 'PolicyId',
        'status'         => 'Status',
        'tagId'          => 'TagId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationIds)) {
            Model::validateArray($this->applicationIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessModes) {
            $res['AccessModes'] = $this->accessModes;
        }

        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->applicationIds) {
            if (\is_array($this->applicationIds)) {
                $res['ApplicationIds'] = [];
                $n1                    = 0;
                foreach ($this->applicationIds as $item1) {
                    $res['ApplicationIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->connectorId) {
            $res['ConnectorId'] = $this->connectorId;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
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
        if (isset($map['AccessModes'])) {
            $model->accessModes = $map['AccessModes'];
        }

        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['ApplicationIds'])) {
            if (!empty($map['ApplicationIds'])) {
                $model->applicationIds = [];
                $n1                    = 0;
                foreach ($map['ApplicationIds'] as $item1) {
                    $model->applicationIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ConnectorId'])) {
            $model->connectorId = $map['ConnectorId'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}
