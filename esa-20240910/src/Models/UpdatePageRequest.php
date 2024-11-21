<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdatePageRequest extends Model
{
    /**
     * @description The Base64-encoded content of the error page. The content type is specified by the Content-Type field.
     *
     * This parameter is required.
     * @example PGh0bWw+aGVsbG8gcGFnZTwvaHRtbD4=
     *
     * @var string
     */
    public $content;

    /**
     * @description The Content-Type field in the HTTP header. Valid values:
     *
     *   text/html
     *   application/json
     *
     * This parameter is required.
     * @example text/html
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The description of the custom error page.
     *
     * @example a custom deny page
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the custom error page, which can be obtained by calling the [ListPages](https://help.aliyun.com/document_detail/2850223.html) operation.
     *
     * This parameter is required.
     * @example 50000001
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the custom error page.
     *
     * This parameter is required.
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
