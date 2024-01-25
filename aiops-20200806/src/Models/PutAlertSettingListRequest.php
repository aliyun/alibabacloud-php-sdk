<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class PutAlertSettingListRequest extends Model
{
    /**
     * @var string
     */
    public $alertSettingEditRequestListJson;

    /**
     * @var string
     */
    public $contactGroupIdsJson;

    /**
     * @var string
     */
    public $contactIdsJson;
    protected $_name = [
        'alertSettingEditRequestListJson' => 'AlertSettingEditRequestListJson',
        'contactGroupIdsJson'             => 'ContactGroupIdsJson',
        'contactIdsJson'                  => 'ContactIdsJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertSettingEditRequestListJson) {
            $res['AlertSettingEditRequestListJson'] = $this->alertSettingEditRequestListJson;
        }
        if (null !== $this->contactGroupIdsJson) {
            $res['ContactGroupIdsJson'] = $this->contactGroupIdsJson;
        }
        if (null !== $this->contactIdsJson) {
            $res['ContactIdsJson'] = $this->contactIdsJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutAlertSettingListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertSettingEditRequestListJson'])) {
            $model->alertSettingEditRequestListJson = $map['AlertSettingEditRequestListJson'];
        }
        if (isset($map['ContactGroupIdsJson'])) {
            $model->contactGroupIdsJson = $map['ContactGroupIdsJson'];
        }
        if (isset($map['ContactIdsJson'])) {
            $model->contactIdsJson = $map['ContactIdsJson'];
        }

        return $model;
    }
}
