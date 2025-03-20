<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetPageResponseBody extends Model
{
    /**
     * @description The Base64-encoded content of the error page. The content type is specified by the Content-Type field.
     *
     * This parameter is required.
     *
     * @example PGh0bWw+aGVsbG8gcGFnZTwvaHRtbD4=
     *
     * @var string
     */
    public $content;

    /**
     * @description The Content-Type field in the HTTP header.
     *
     * This parameter is required.
     *
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
     * @description The ID of the custom error page.[](~~2850223~~)
     *
     * @example 50000001
     *
     * @var int
     */
    public $id;

    /**
     * @description The type of the custom response page.
     *
     * @example custom
     *
     * @var string
     */
    public $kind;

    /**
     * @description The name of the custom response page.
     *
     * This parameter is required.
     *
     * @example example
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example 36af3fcc-43d0-441c-86b1-428951dc8225
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the custom error page was last modified.
     *
     * @example 2024-01-01T00:00:00Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'content' => 'Content',
        'contentType' => 'ContentType',
        'description' => 'Description',
        'id' => 'Id',
        'kind' => 'Kind',
        'name' => 'Name',
        'requestId' => 'RequestId',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

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
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPageResponseBody
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
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
