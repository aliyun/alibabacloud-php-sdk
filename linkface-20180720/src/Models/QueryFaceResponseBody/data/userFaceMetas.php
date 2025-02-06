<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkFace\V20180720\Models\QueryFaceResponseBody\data;

use AlibabaCloud\Dara\Model;

class userFaceMetas extends Model
{
    /**
     * @var string
     */
    public $clientTag;
    /**
     * @var string
     */
    public $faceUrl;
    /**
     * @var int
     */
    public $index;
    /**
     * @var string
     */
    public $userInfo;
    protected $_name = [
        'clientTag' => 'ClientTag',
        'faceUrl'   => 'FaceUrl',
        'index'     => 'Index',
        'userInfo'  => 'UserInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientTag) {
            $res['ClientTag'] = $this->clientTag;
        }

        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = $this->userInfo;
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
        if (isset($map['ClientTag'])) {
            $model->clientTag = $map['ClientTag'];
        }

        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = $map['UserInfo'];
        }

        return $model;
    }
}
