<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class InsertMediaToSearchLibRequest extends Model
{
    /**
     * @var string
     */
    public $input;
    /**
     * @var string
     */
    public $mediaId;
    /**
     * @var string
     */
    public $mediaType;
    /**
     * @var string
     */
    public $msgBody;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
