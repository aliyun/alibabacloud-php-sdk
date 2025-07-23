<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Tea\Model;

class IncidentContactStruct extends Model
{
    /**
     * @var string[]
     */
    public $channel;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactType;
    protected $_name = [
        'channel' => 'channel',
        'contactId' => 'contactId',
        'contactType' => 'contactType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->contactId) {
            $res['contactId'] = $this->contactId;
        }
        if (null !== $this->contactType) {
            $res['contactType'] = $this->contactType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IncidentContactStruct
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channel'])) {
            if (!empty($map['channel'])) {
                $model->channel = $map['channel'];
            }
        }
        if (isset($map['contactId'])) {
            $model->contactId = $map['contactId'];
        }
        if (isset($map['contactType'])) {
            $model->contactType = $map['contactType'];
        }

        return $model;
    }
}
