<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models\GetTrainPicAvatarStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $avatarId;

    /**
     * @var string
     */
    public $previewURL;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'avatarId' => 'avatarId',
        'previewURL' => 'previewURL',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarId) {
            $res['avatarId'] = $this->avatarId;
        }

        if (null !== $this->previewURL) {
            $res['previewURL'] = $this->previewURL;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['avatarId'])) {
            $model->avatarId = $map['avatarId'];
        }

        if (isset($map['previewURL'])) {
            $model->previewURL = $map['previewURL'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
