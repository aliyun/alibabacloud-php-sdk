<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DescribeDataSourceResponseBody extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $conf;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $createFrom;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $modifier;
    protected $_name = [
        'status'      => 'Status',
        'categoryId'  => 'CategoryId',
        'description' => 'Description',
        'conf'        => 'Conf',
        'requestId'   => 'RequestId',
        'clusterId'   => 'ClusterId',
        'sourceType'  => 'SourceType',
        'gmtModified' => 'GmtModified',
        'creator'     => 'Creator',
        'createFrom'  => 'CreateFrom',
        'name'        => 'Name',
        'gmtCreate'   => 'GmtCreate',
        'id'          => 'Id',
        'modifier'    => 'Modifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->conf) {
            $res['Conf'] = $this->conf;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->createFrom) {
            $res['CreateFrom'] = $this->createFrom;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDataSourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Conf'])) {
            $model->conf = $map['Conf'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['CreateFrom'])) {
            $model->createFrom = $map['CreateFrom'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        return $model;
    }
}
