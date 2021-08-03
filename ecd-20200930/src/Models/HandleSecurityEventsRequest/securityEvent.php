<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\HandleSecurityEventsRequest;

use AlibabaCloud\Tea\Model;

class securityEvent extends Model
{
    /**
     * @var string
     */
    public $securityEventId;

    /**
     * @var string
     */
    public $desktopId;
    protected $_name = [
        'securityEventId' => 'SecurityEventId',
        'desktopId'       => 'DesktopId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }
        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return securityEvent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityEventId'])) {
            $model->securityEventId = $map['SecurityEventId'];
        }
        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        return $model;
    }
}
