<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListAlertNotificationsResponseBody\listResult\data\alertReceiver\user;
use AlibabaCloud\Tea\Model;

class alertReceiver extends Model
{
    /**
     * @example SMS
     *
     * @var string
     */
    public $alertChannelType;

    /**
     * @example 123456
     *
     * @var string
     */
    public $customAlertChannelId;

    /**
     * @example 12345
     *
     * @var string
     */
    public $onCallTableId;

    /**
     * @example test
     *
     * @var string
     */
    public $onCallTableName;

    /**
     * @example OWNER
     *
     * @var string
     */
    public $type;

    /**
     * @var user
     */
    public $user;
    protected $_name = [
        'alertChannelType'     => 'AlertChannelType',
        'customAlertChannelId' => 'CustomAlertChannelId',
        'onCallTableId'        => 'OnCallTableId',
        'onCallTableName'      => 'OnCallTableName',
        'type'                 => 'Type',
        'user'                 => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertChannelType) {
            $res['AlertChannelType'] = $this->alertChannelType;
        }
        if (null !== $this->customAlertChannelId) {
            $res['CustomAlertChannelId'] = $this->customAlertChannelId;
        }
        if (null !== $this->onCallTableId) {
            $res['OnCallTableId'] = $this->onCallTableId;
        }
        if (null !== $this->onCallTableName) {
            $res['OnCallTableName'] = $this->onCallTableName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->user) {
            $res['User'] = null !== $this->user ? $this->user->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertReceiver
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertChannelType'])) {
            $model->alertChannelType = $map['AlertChannelType'];
        }
        if (isset($map['CustomAlertChannelId'])) {
            $model->customAlertChannelId = $map['CustomAlertChannelId'];
        }
        if (isset($map['OnCallTableId'])) {
            $model->onCallTableId = $map['OnCallTableId'];
        }
        if (isset($map['OnCallTableName'])) {
            $model->onCallTableName = $map['OnCallTableName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['User'])) {
            $model->user = user::fromMap($map['User']);
        }

        return $model;
    }
}
