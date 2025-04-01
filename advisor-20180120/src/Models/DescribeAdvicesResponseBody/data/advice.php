<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models\DescribeAdvicesResponseBody\data;

use AlibabaCloud\Dara\Model;

class advice extends Model
{
    /**
     * @var int
     */
    public $aliyunId;

    /**
     * @var string
     */
    public $checkId;

    /**
     * @var string
     */
    public $checkName;

    /**
     * @var int
     */
    public $checkPlanId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isExpired;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $severity;
    protected $_name = [
        'aliyunId' => 'AliyunId',
        'checkId' => 'CheckId',
        'checkName' => 'CheckName',
        'checkPlanId' => 'CheckPlanId',
        'content' => 'Content',
        'description' => 'Description',
        'gmtCreated' => 'GmtCreated',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'isExpired' => 'IsExpired',
        'product' => 'Product',
        'resource' => 'Resource',
        'resourceId' => 'ResourceId',
        'severity' => 'Severity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkName) {
            $res['CheckName'] = $this->checkName;
        }

        if (null !== $this->checkPlanId) {
            $res['CheckPlanId'] = $this->checkPlanId;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
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

        if (null !== $this->product) {
            $res['Product'] = $this->product;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckName'])) {
            $model->checkName = $map['CheckName'];
        }

        if (isset($map['CheckPlanId'])) {
            $model->checkPlanId = $map['CheckPlanId'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
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
