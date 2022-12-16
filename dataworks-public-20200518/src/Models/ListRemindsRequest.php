<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListRemindsRequest extends Model
{
    /**
     * @example 9527952795****
     *
     * @var string
     */
    public $alertTarget;

    /**
     * @example 9527952795****
     *
     * @var string
     */
    public $founder;

    /**
     * @example 1234
     *
     * @var int
     */
    public $nodeId;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example FINISHED,ERROR
     *
     * @var string
     */
    public $remindTypes;

    /**
     * @var string
     */
    public $searchText;
    protected $_name = [
        'alertTarget' => 'AlertTarget',
        'founder'     => 'Founder',
        'nodeId'      => 'NodeId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'remindTypes' => 'RemindTypes',
        'searchText'  => 'SearchText',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertTarget) {
            $res['AlertTarget'] = $this->alertTarget;
        }
        if (null !== $this->founder) {
            $res['Founder'] = $this->founder;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->remindTypes) {
            $res['RemindTypes'] = $this->remindTypes;
        }
        if (null !== $this->searchText) {
            $res['SearchText'] = $this->searchText;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRemindsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTarget'])) {
            $model->alertTarget = $map['AlertTarget'];
        }
        if (isset($map['Founder'])) {
            $model->founder = $map['Founder'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RemindTypes'])) {
            $model->remindTypes = $map['RemindTypes'];
        }
        if (isset($map['SearchText'])) {
            $model->searchText = $map['SearchText'];
        }

        return $model;
    }
}
