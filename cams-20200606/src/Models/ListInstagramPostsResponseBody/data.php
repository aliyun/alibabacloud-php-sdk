<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListInstagramPostsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $fullPicture;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var string
     */
    public $mediaUrl;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $permalinkUrl;
    protected $_name = [
        'createdTime' => 'CreatedTime',
        'fullPicture' => 'FullPicture',
        'id' => 'Id',
        'mediaType' => 'MediaType',
        'mediaUrl' => 'MediaUrl',
        'message' => 'Message',
        'permalinkUrl' => 'PermalinkUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->fullPicture) {
            $res['FullPicture'] = $this->fullPicture;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->mediaUrl) {
            $res['MediaUrl'] = $this->mediaUrl;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->permalinkUrl) {
            $res['PermalinkUrl'] = $this->permalinkUrl;
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
        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['FullPicture'])) {
            $model->fullPicture = $map['FullPicture'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['MediaUrl'])) {
            $model->mediaUrl = $map['MediaUrl'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PermalinkUrl'])) {
            $model->permalinkUrl = $map['PermalinkUrl'];
        }

        return $model;
    }
}
