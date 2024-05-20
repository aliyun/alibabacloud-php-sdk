<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\UpdateSessionBizStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $customSessionId;

    /**
     * @var string
     */
    public $platformSessionId;
    protected $_name = [
        'customSessionId'   => 'CustomSessionId',
        'platformSessionId' => 'PlatformSessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customSessionId) {
            $res['CustomSessionId'] = $this->customSessionId;
        }
        if (null !== $this->platformSessionId) {
            $res['PlatformSessionId'] = $this->platformSessionId;
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
        if (isset($map['CustomSessionId'])) {
            $model->customSessionId = $map['CustomSessionId'];
        }
        if (isset($map['PlatformSessionId'])) {
            $model->platformSessionId = $map['PlatformSessionId'];
        }

        return $model;
    }
}
