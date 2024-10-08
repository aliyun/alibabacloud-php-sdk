<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdatePageRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example PGh0bWw+aGVsbG8gcGFnZTwvaHRtbD4=
     *
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @example text/html
     *
     * @var string
     */
    public $contentType;

    /**
     * @example a custom deny page
     *
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example 50000001
     *
     * @var int
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example example
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'content'     => 'Content',
        'contentType' => 'ContentType',
        'description' => 'Description',
        'id'          => 'Id',
        'name'        => 'Name',
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
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return UpdatePageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
