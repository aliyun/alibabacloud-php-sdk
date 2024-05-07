<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\UpdateDetectProcessResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $content;

    /**
     * @example 2020-12-04T14:47:59.000+08:00
     *
     * @var string
     */
    public $createdAt;

    /**
     * @example {}
     *
     * @var string
     */
    public $draft;

    /**
     * @description ID
     *
     * @example cd1c45cd-3eee-4e60-b505-2e330b8755d3
     *
     * @var string
     */
    public $id;

    /**
     * @example 987d563d38f5aef27feca8702c689bb1
     *
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'content'   => 'Content',
        'createdAt' => 'CreatedAt',
        'draft'     => 'Draft',
        'id'        => 'Id',
        'md5'       => 'Md5',
        'name'      => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->draft) {
            $res['Draft'] = $this->draft;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Draft'])) {
            $model->draft = $map['Draft'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
