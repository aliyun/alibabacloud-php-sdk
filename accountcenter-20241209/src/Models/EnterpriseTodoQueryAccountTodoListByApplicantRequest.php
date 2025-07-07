<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AccountCenter\V20241209\Models;

use AlibabaCloud\Dara\Model;

class EnterpriseTodoQueryAccountTodoListByApplicantRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

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
    public $operatePk;

    /**
     * @var string
     */
    public $orientedEcId;

    /**
     * @var string
     */
    public $orientedLeId;

    /**
     * @var string
     */
    public $orientedNbId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $showCompleteInfo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $todoType;
    protected $_name = [
        'appName' => 'AppName',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'operatePk' => 'OperatePk',
        'orientedEcId' => 'OrientedEcId',
        'orientedLeId' => 'OrientedLeId',
        'orientedNbId' => 'OrientedNbId',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'showCompleteInfo' => 'ShowCompleteInfo',
        'status' => 'Status',
        'todoType' => 'TodoType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->operatePk) {
            $res['OperatePk'] = $this->operatePk;
        }

        if (null !== $this->orientedEcId) {
            $res['OrientedEcId'] = $this->orientedEcId;
        }

        if (null !== $this->orientedLeId) {
            $res['OrientedLeId'] = $this->orientedLeId;
        }

        if (null !== $this->orientedNbId) {
            $res['OrientedNbId'] = $this->orientedNbId;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->showCompleteInfo) {
            $res['ShowCompleteInfo'] = $this->showCompleteInfo;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->todoType) {
            $res['TodoType'] = $this->todoType;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OperatePk'])) {
            $model->operatePk = $map['OperatePk'];
        }

        if (isset($map['OrientedEcId'])) {
            $model->orientedEcId = $map['OrientedEcId'];
        }

        if (isset($map['OrientedLeId'])) {
            $model->orientedLeId = $map['OrientedLeId'];
        }

        if (isset($map['OrientedNbId'])) {
            $model->orientedNbId = $map['OrientedNbId'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ShowCompleteInfo'])) {
            $model->showCompleteInfo = $map['ShowCompleteInfo'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TodoType'])) {
            $model->todoType = $map['TodoType'];
        }

        return $model;
    }
}
