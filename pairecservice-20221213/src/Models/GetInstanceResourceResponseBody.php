<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceResourceResponseBody extends Model
{
    /**
     * @example DataManagement
     *
     * @var string
     */
    public $category;

    /**
     * @example {}
     *
     * @var string
     */
    public $config;

    /**
     * @example 2020-10-13 17:34:52
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2020-10-13 17:34:52
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example storage
     *
     * @var string
     */
    public $group;

    /**
     * @example D75C43DC-3D3A-5CC8-9AAC-8C77306C433B
     *
     * @var string
     */
    public $requestId;

    /**
     * @example reso-2s416t***
     *
     * @var string
     */
    public $resourceId;

    /**
     * @example OSS
     *
     * @var string
     */
    public $type;

    /**
     * @example bucket-test-123
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'category'        => 'Category',
        'config'          => 'Config',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'group'           => 'Group',
        'requestId'       => 'RequestId',
        'resourceId'      => 'ResourceId',
        'type'            => 'Type',
        'uri'             => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceResourceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
