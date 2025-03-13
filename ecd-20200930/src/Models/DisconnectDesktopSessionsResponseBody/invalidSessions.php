<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DisconnectDesktopSessionsResponseBody;

use AlibabaCloud\Tea\Model;

class invalidSessions extends Model
{
    /**
     * @description The cloud desktop ID.
     *
     * @example ecd-2jv6wugbkp65pxxxx
     *
     * @var string
     */
    public $desktopId;

    /**
     * @description The end user ID.
     *
     * @example wy01
     *
     * @var string
     */
    public $endUserId;
    protected $_name = [
        'desktopId' => 'DesktopId',
        'endUserId' => 'EndUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidSessions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        return $model;
    }
}
