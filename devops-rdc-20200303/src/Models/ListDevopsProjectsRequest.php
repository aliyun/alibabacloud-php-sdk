<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models;

use AlibabaCloud\Tea\Model;

class ListDevopsProjectsRequest extends Model
{
    /**
     * @var string
     */
    public $orgId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $pageToken;

    /**
     * @var string
     */
    public $selectBy;
    protected $_name = [
        'orgId'     => 'OrgId',
        'pageSize'  => 'PageSize',
        'orderBy'   => 'OrderBy',
        'pageToken' => 'PageToken',
        'selectBy'  => 'SelectBy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageToken) {
            $res['PageToken'] = $this->pageToken;
        }
        if (null !== $this->selectBy) {
            $res['SelectBy'] = $this->selectBy;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDevopsProjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageToken'])) {
            $model->pageToken = $map['PageToken'];
        }
        if (isset($map['SelectBy'])) {
            $model->selectBy = $map['SelectBy'];
        }

        return $model;
    }
}
