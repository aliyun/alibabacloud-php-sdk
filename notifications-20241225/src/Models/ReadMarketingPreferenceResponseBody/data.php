<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models\ReadMarketingPreferenceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $allowMarketing;

    /**
     * @var string
     */
    public $contactEmail;

    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactMobile;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $position;
    protected $_name = [
        'allowMarketing' => 'AllowMarketing',
        'contactEmail' => 'ContactEmail',
        'contactId' => 'ContactId',
        'contactMobile' => 'ContactMobile',
        'contactName' => 'ContactName',
        'position' => 'Position',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowMarketing) {
            $res['AllowMarketing'] = $this->allowMarketing;
        }

        if (null !== $this->contactEmail) {
            $res['ContactEmail'] = $this->contactEmail;
        }

        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->contactMobile) {
            $res['ContactMobile'] = $this->contactMobile;
        }

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->position) {
            $res['Position'] = $this->position;
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
        if (isset($map['AllowMarketing'])) {
            $model->allowMarketing = $map['AllowMarketing'];
        }

        if (isset($map['ContactEmail'])) {
            $model->contactEmail = $map['ContactEmail'];
        }

        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['ContactMobile'])) {
            $model->contactMobile = $map['ContactMobile'];
        }

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }

        return $model;
    }
}
