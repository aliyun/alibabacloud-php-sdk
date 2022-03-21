<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\CreateAppGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $appGroupId;

    /**
     * @var string
     */
    public $appKey;
    protected $_name = [
        'appGroupId' => 'AppGroupId',
        'appKey'     => 'AppKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroupId) {
            $res['AppGroupId'] = $this->appGroupId;
        }
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
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
        if (isset($map['AppGroupId'])) {
            $model->appGroupId = $map['AppGroupId'];
        }
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        return $model;
    }
}
