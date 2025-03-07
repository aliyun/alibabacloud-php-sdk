<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class InsertMediaToSearchLibRequest extends Model
{
    /**
     * @description The URL of the video, audio, or image file that you want to import to the search library.
     *
     * Note: Make sure that you specify a correct file name and the bucket in which the file resides is in the same region where this operation is called. Otherwise, the file cannot be found or the operation may fail.
     *
     * Specify an Object Storage Service (OSS) URL in the following format: oss://[Bucket name]/[File path]. For example, you can specify oss://[example-bucket-****]/[object_path-****].
     *
     * Specify an HTTP URL in the following format: public endpoint. For example, you can specify http://example-test-\\*\\*\\*\\*.mp4.
     *
     * This parameter is required.
     * @example http://example-test-****.mp4
     *
     * @var string
     */
    public $input;

    /**
     * @description The ID of the media asset. Each media ID is unique. If you leave this parameter empty, a media ID is automatically generated for this parameter.
     *
     * @example 411bed50018971edb60b0764a0ec6***
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The type of the media asset. Valid values:
     *
     *   video (default)
     *   image
     *   audio
     *
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description The message body.
     *
     * @example {}
     *
     * @var string
     */
    public $msgBody;

    /**
     * @description The name of the search library. Default value: ims-default-search-lib.
     *
     * @example test1
     *
     * @var string
     */
    public $searchLibName;
    protected $_name = [
        'input'         => 'Input',
        'mediaId'       => 'MediaId',
        'mediaType'     => 'MediaType',
        'msgBody'       => 'MsgBody',
        'searchLibName' => 'SearchLibName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->input) {
            $res['Input'] = $this->input;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->msgBody) {
            $res['MsgBody'] = $this->msgBody;
        }
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InsertMediaToSearchLibRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Input'])) {
            $model->input = $map['Input'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['MsgBody'])) {
            $model->msgBody = $map['MsgBody'];
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }

        return $model;
    }
}
