<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ListPhoneNumbersRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $searchPattern;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var bool
     */
    public $active;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'instanceId'    => 'InstanceId',
        'searchPattern' => 'SearchPattern',
        'usage'         => 'Usage',
        'active'        => 'Active',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->searchPattern) {
            $res['SearchPattern'] = $this->searchPattern;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPhoneNumbersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SearchPattern'])) {
            $model->searchPattern = $map['SearchPattern'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
