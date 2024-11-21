<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreatePageRequest extends Model
{
    /**
     * @description The Base64-encoded page content. Example: "PGh0bWw+aGVsbG8gcGFnZTwvaHRtbD4=", which indicates "hello page".
     *
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
     * @description The description of the page.
     *
     * @example a custom deny page
     *
     * @var string
     */
    public $description;

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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePageRequest
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
