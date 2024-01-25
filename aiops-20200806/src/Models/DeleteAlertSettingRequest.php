<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class DeleteAlertSettingRequest extends Model
{
    /**
     * @var int
     */
    public $alertSettingId;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'alertSettingId' => 'AlertSettingId',
        'operaUid'       => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertSettingId) {
            $res['AlertSettingId'] = $this->alertSettingId;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAlertSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertSettingId'])) {
            $model->alertSettingId = $map['AlertSettingId'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
