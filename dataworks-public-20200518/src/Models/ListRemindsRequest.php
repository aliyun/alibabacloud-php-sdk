<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class ListRemindsRequest extends Model
{
    /**
     * @var string
     */
    public $alertTarget;

    /**
     * @var string
     */
    public $founder;

    /**
     * @var int
     */
    public $nodeId;

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
    public $remindTypes;

    /**
     * @var string
     */
    public $searchText;
    protected $_name = [
        'alertTarget' => 'AlertTarget',
        'founder' => 'Founder',
        'nodeId' => 'NodeId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'remindTypes' => 'RemindTypes',
        'searchText' => 'SearchText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
