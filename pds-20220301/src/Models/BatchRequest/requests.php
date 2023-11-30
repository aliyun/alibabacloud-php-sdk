<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models\BatchRequest;

use AlibabaCloud\Tea\Model;

class requests extends Model
{
    /**
     * @description The request parameters of a child request. The parameter value must be a JSON string. For more information, see the topic of the corresponding child request.
     *
     * Before you specify the request body, you must specify a header by using Content-Type. Content-Type can only be set to application/json.
     * @var string[]
     */
    public $body;

    /**
     * @description The header of a child request, which indicates the type of the data specified in the request body.
     *
     * @var string[]
     */
    public $headers;

    /**
     * @description The ID of the child request. The ID is used to associate a child request with a response. The ID of a child request must be unique.
     *
     * @example 93433894994ad2e1
     *
     * @var string
     */
    public $id;

    /**
     * @description The method of a child request. Valid values:
     *
     *   POST
     *   GET
     *   PUT
     *   DELETE
     *   HEAD
     *
     * @example POST
     *
     * @var string
     */
    public $method;

    /**
     * @description The API path of a child request. Valid values:
     *
     *   /file/get: queries the information about a file.
     *   /file/update: modifies the information about a file.
     *   /file/search: searches for a file.
     *   /file/copy: copies a file or folder.
     *   /file/move: moves a file or folder.
     *   /file/delete: deletes a file or folder.
     *   /file/get_download_url: queries the download URL of a file.
     *   /file/get_share_link_download_url: queries the download URL of a file in a share.
     *   /recyclebin/trash: moves a file or folder to the recycle bin.
     *   /recyclebin/restore: restores a file or folder.
     *   /file/put_usertags: adds tags to a user.
     *   /file/delete_usertags: removes tags from a user.
     *   /drive/get: queries the information about a drive.
     *   /user/get: queries the information about a user.
     *   /group/get: queries the information about a group.
     *   /share_link/create: creates a share.
     *   /share_link/update: modifies a share.
     *   /share_link/cancel: cancels a share.
     *   /share_link/list: queries shares.
     *   /share_link/get: queries the information about a share.
     *   /share_link/get_share_token: queries an access token of a share.
     *   /async_task/get: queries the information about an asynchronous task.
     *
     * @example /file/get
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'body'    => 'body',
        'headers' => 'headers',
        'id'      => 'id',
        'method'  => 'method',
        'url'     => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->headers) {
            $res['headers'] = $this->headers;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->method) {
            $res['method'] = $this->method;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requests
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['headers'])) {
            $model->headers = $map['headers'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['method'])) {
            $model->method = $map['method'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
