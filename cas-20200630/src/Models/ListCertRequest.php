<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200630\Models;

use AlibabaCloud\Tea\Model;

class ListCertRequest extends Model
{
    /**
     * @example 2024-05-13 12:59:45
     *
     * @var string
     */
    public $afterDate;

    /**
     * @example 2025-09-04
     *
     * @var string
     */
    public $beforeDate;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 1ef79512-569b-6a4e-9105-9b91473562f7
     *
     * @var string
     */
    public $instanceUuid;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 1d2db86sca4384811e0b5e8707e68181f
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 50
     *
     * @var int
     */
    public $showSize;

    /**
     * @example ISSUE
     *
     * @var string
     */
    public $status;

    /**
     * @example CLIENT
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'afterDate' => 'AfterDate',
        'beforeDate' => 'BeforeDate',
        'currentPage' => 'CurrentPage',
        'instanceUuid' => 'InstanceUuid',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'showSize' => 'ShowSize',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->afterDate) {
            $res['AfterDate'] = $this->afterDate;
        }
        if (null !== $this->beforeDate) {
            $res['BeforeDate'] = $this->beforeDate;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->instanceUuid) {
            $res['InstanceUuid'] = $this->instanceUuid;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->showSize) {
            $res['ShowSize'] = $this->showSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AfterDate'])) {
            $model->afterDate = $map['AfterDate'];
        }
        if (isset($map['BeforeDate'])) {
            $model->beforeDate = $map['BeforeDate'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['InstanceUuid'])) {
            $model->instanceUuid = $map['InstanceUuid'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ShowSize'])) {
            $model->showSize = $map['ShowSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
