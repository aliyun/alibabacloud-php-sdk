<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesResponseBody\data;

use AlibabaCloud\Tea\Model;

class advice extends Model
{
    /**
     * @example -
     *
     * @var string
     */
    public $action;

    /**
     * @example 1234567891234567
     *
     * @var int
     */
    public $aliyunId;

    /**
     * @example EcsHighCpuUtilization
     *
     * @var string
     */
    public $checkId;

    /**
     * @var string
     */
    public $checkName;

    /**
     * @example [
     * ]
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $description;

    /**
     * @example -
     *
     * @var string
     */
    public $details;

    /**
     * @example 2023-07-01 00:00:00
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @example 2023-07-01 00:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description ID
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @example false
     *
     * @var bool
     */
    public $isExpired;

    /**
     * @example -
     *
     * @var string
     */
    public $links;

    /**
     * @example ecs
     *
     * @var string
     */
    public $product;

    /**
     * @example -
     *
     * @var string
     */
    public $reason;

    /**
     * @example {
     * }
     * @var string
     */
    public $resource;

    /**
     * @example i-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example 1
     *
     * @var int
     */
    public $severity;
    protected $_name = [
        'action'      => 'Action',
        'aliyunId'    => 'AliyunId',
        'checkId'     => 'CheckId',
        'checkName'   => 'CheckName',
        'content'     => 'Content',
        'description' => 'Description',
        'details'     => 'Details',
        'gmtCreated'  => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'id'          => 'Id',
        'isExpired'   => 'IsExpired',
        'links'       => 'Links',
        'product'     => 'Product',
        'reason'      => 'Reason',
        'resource'    => 'Resource',
        'resourceId'  => 'ResourceId',
        'severity'    => 'Severity',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->isExpired) {
            $res['IsExpired'] = $this->isExpired;
        }
        if (null !== $this->links) {
            $res['Links'] = $this->links;
        }
        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->severity) {
            $res['Severity'] = $this->severity;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return advice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IsExpired'])) {
            $model->isExpired = $map['IsExpired'];
        }
        if (isset($map['Links'])) {
            $model->links = $map['Links'];
        }
        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Severity'])) {
            $model->severity = $map['Severity'];
        }

        return $model;
    }
}
