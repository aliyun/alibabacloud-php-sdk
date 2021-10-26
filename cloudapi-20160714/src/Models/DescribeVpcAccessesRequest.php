<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DescribeVpcAccessesRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $accurateQuery;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'name'          => 'Name',
        'accurateQuery' => 'AccurateQuery',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->accurateQuery) {
            $res['AccurateQuery'] = $this->accurateQuery;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcAccessesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AccurateQuery'])) {
            $model->accurateQuery = $map['AccurateQuery'];
        }

        return $model;
    }
}
