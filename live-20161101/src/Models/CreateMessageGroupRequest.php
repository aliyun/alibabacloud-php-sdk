<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateMessageGroupRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * This parameter is required.
     *
     * @example a494caec-***-695ef345db77
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the creator. The ID can be up to 36 characters in length and can contain only letters and digits.
     *
     * This parameter is required.
     *
     * @example as****hs
     *
     * @var string
     */
    public $creatorId;

    /**
     * @description The extended field.
     *
     * @var string[]
     */
    public $extension;
    protected $_name = [
        'appId' => 'AppId',
        'creatorId' => 'CreatorId',
        'extension' => 'Extension',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMessageGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }

        return $model;
    }
}
