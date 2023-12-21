<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListInstanceResourcesResponseBody;

use AlibabaCloud\Tea\Model;

class resources extends Model
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
    public $gmtCreateAt;

    /**
     * @example 2020-10-13 17:34:52
     *
     * @var string
     */
    public $gmtModifiedAt;

    /**
     * @example storage
     *
     * @var string
     */
    public $group;

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
        'category'      => 'Category',
        'config'        => 'Config',
        'gmtCreateAt'   => 'GmtCreateAt',
        'gmtModifiedAt' => 'GmtModifiedAt',
        'group'         => 'Group',
        'resourceId'    => 'ResourceId',
        'type'          => 'Type',
        'uri'           => 'Uri',
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
        if (null !== $this->gmtCreateAt) {
            $res['GmtCreateAt'] = $this->gmtCreateAt;
        }
        if (null !== $this->gmtModifiedAt) {
            $res['GmtModifiedAt'] = $this->gmtModifiedAt;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
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
     * @return resources
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
        if (isset($map['GmtCreateAt'])) {
            $model->gmtCreateAt = $map['GmtCreateAt'];
        }
        if (isset($map['GmtModifiedAt'])) {
            $model->gmtModifiedAt = $map['GmtModifiedAt'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
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
