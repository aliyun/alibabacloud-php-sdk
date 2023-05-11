<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\SetDeviceDesiredPropertyResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the message that IoT Platform sends to the device to specify desired property values.
     *
     * @example 300511751
     *
     * @var string
     */
    public $messageId;

    /**
     * @description The current version numbers of the desired property values.
     *
     * @example {\"Temperature\":2}
     *
     * @var string
     */
    public $versions;
    protected $_name = [
        'messageId' => 'MessageId',
        'versions'  => 'Versions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->versions) {
            $res['Versions'] = $this->versions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['Versions'])) {
            $model->versions = $map['Versions'];
        }

        return $model;
    }
}
