<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class CreateBotRequest extends Model
{
    /**
     * @var string
     */
    public $languageCode;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $avatar;

    /**
     * @var string
     */
    public $introduction;

    /**
     * @var string
     */
    public $robotType;
    protected $_name = [
        'languageCode' => 'LanguageCode',
        'timeZone'     => 'TimeZone',
        'name'         => 'Name',
        'avatar'       => 'Avatar',
        'introduction' => 'Introduction',
        'robotType'    => 'RobotType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->languageCode) {
            $res['LanguageCode'] = $this->languageCode;
        }
        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->avatar) {
            $res['Avatar'] = $this->avatar;
        }
        if (null !== $this->introduction) {
            $res['Introduction'] = $this->introduction;
        }
        if (null !== $this->robotType) {
            $res['RobotType'] = $this->robotType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LanguageCode'])) {
            $model->languageCode = $map['LanguageCode'];
        }
        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Avatar'])) {
            $model->avatar = $map['Avatar'];
        }
        if (isset($map['Introduction'])) {
            $model->introduction = $map['Introduction'];
        }
        if (isset($map['RobotType'])) {
            $model->robotType = $map['RobotType'];
        }

        return $model;
    }
}
