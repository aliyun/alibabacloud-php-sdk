<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models;

use AlibabaCloud\Tea\Model;

class CreateAvatarTalkProjectRequest extends Model
{
    /**
     * @var string
     */
    public $avatarProjectId;

    /**
     * @var string
     */
    public $jwtToken;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $ttsVoice;

    /**
     * @var string
     */
    public $txtContent;
    protected $_name = [
        'avatarProjectId' => 'AvatarProjectId',
        'jwtToken'        => 'JwtToken',
        'title'           => 'Title',
        'ttsVoice'        => 'TtsVoice',
        'txtContent'      => 'TxtContent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->avatarProjectId) {
            $res['AvatarProjectId'] = $this->avatarProjectId;
        }
        if (null !== $this->jwtToken) {
            $res['JwtToken'] = $this->jwtToken;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->ttsVoice) {
            $res['TtsVoice'] = $this->ttsVoice;
        }
        if (null !== $this->txtContent) {
            $res['TxtContent'] = $this->txtContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAvatarTalkProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvatarProjectId'])) {
            $model->avatarProjectId = $map['AvatarProjectId'];
        }
        if (isset($map['JwtToken'])) {
            $model->jwtToken = $map['JwtToken'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['TtsVoice'])) {
            $model->ttsVoice = $map['TtsVoice'];
        }
        if (isset($map['TxtContent'])) {
            $model->txtContent = $map['TxtContent'];
        }

        return $model;
    }
}
