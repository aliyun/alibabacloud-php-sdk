<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class CreateAlertContactGroupRequest extends Model
{
    /**
     * @var string
     */
    public $alertContactGroupJson;

    /**
     * @var string
     */
    public $contactIdsJson;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'alertContactGroupJson' => 'AlertContactGroupJson',
        'contactIdsJson'        => 'ContactIdsJson',
        'operaUid'              => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertContactGroupJson) {
            $res['AlertContactGroupJson'] = $this->alertContactGroupJson;
        }
        if (null !== $this->contactIdsJson) {
            $res['ContactIdsJson'] = $this->contactIdsJson;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAlertContactGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertContactGroupJson'])) {
            $model->alertContactGroupJson = $map['AlertContactGroupJson'];
        }
        if (isset($map['ContactIdsJson'])) {
            $model->contactIdsJson = $map['ContactIdsJson'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
