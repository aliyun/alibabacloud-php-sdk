<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListPrivateAccessApplicationsShrinkRequest extends Model
{
    /**
     * @example 192.168.0.0/16
     *
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $applicationIdsShrink;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example private_access_application_name
     *
     * @var string
     */
    public $name;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example pa-policy-54a7838a48bf****
     *
     * @var string
     */
    public $policyId;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $status;

    /**
     * @example tag-d3f64e8bdd4a****
     *
     * @var string
     */
    public $tagId;
    protected $_name = [
        'address'              => 'Address',
        'applicationIdsShrink' => 'ApplicationIds',
        'currentPage'          => 'CurrentPage',
        'name'                 => 'Name',
        'pageSize'             => 'PageSize',
        'policyId'             => 'PolicyId',
        'status'               => 'Status',
        'tagId'                => 'TagId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->applicationIdsShrink) {
            $res['ApplicationIds'] = $this->applicationIdsShrink;
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

    /**
     * @param array $map
     *
     * @return ListPrivateAccessApplicationsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['ApplicationIds'])) {
            $model->applicationIdsShrink = $map['ApplicationIds'];
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
