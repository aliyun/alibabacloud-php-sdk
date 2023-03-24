<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListPrivateAccessTagsShrinkRequest extends Model
{
    /**
     * @example pa-application-e12860ef6c48****
     *
     * @var string
     */
    public $applicationId;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example tag_name
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
     * @var string
     */
    public $tagIdsShrink;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'currentPage'   => 'CurrentPage',
        'name'          => 'Name',
        'pageSize'      => 'PageSize',
        'policyId'      => 'PolicyId',
        'tagIdsShrink'  => 'TagIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
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
        if (null !== $this->tagIdsShrink) {
            $res['TagIds'] = $this->tagIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrivateAccessTagsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
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
        if (isset($map['TagIds'])) {
            $model->tagIdsShrink = $map['TagIds'];
        }

        return $model;
    }
}
