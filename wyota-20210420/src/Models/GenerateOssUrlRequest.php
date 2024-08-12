<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class GenerateOssUrlRequest extends Model
{
    /**
     * @var string[]
     */
    public $objectNameList;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'objectNameList' => 'ObjectNameList',
        'sessionId'      => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectNameList) {
            $res['ObjectNameList'] = $this->objectNameList;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateOssUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ObjectNameList'])) {
            if (!empty($map['ObjectNameList'])) {
                $model->objectNameList = $map['ObjectNameList'];
            }
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
