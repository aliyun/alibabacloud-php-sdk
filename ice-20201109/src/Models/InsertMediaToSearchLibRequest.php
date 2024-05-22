<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class InsertMediaToSearchLibRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example http://example-test-****.mp4
     *
     * @var string
     */
    public $input;

    /**
     * @example 411bed50018971edb60b0764a0ec6***
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @example {}
     *
     * @var string
     */
    public $msgBody;

    /**
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
