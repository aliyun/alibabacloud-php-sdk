<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class UpdateDetectProcessRequest extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $content;

    /**
     * @example {}
     *
     * @var string
     */
    public $draft;

    /**
     * @description ID
     *
     * @example 0f1c45cd-3eee-4e60-b505-2e330b8755d3
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'content' => 'Content',
        'draft'   => 'Draft',
        'id'      => 'Id',
        'name'    => 'Name',
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
        if (null !== $this->draft) {
            $res['Draft'] = $this->draft;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDetectProcessRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Draft'])) {
            $model->draft = $map['Draft'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
