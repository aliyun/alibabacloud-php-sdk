<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\OfflineBatchTaskResponseBody;

use AlibabaCloud\Tea\Model;

class offlineResult extends Model
{
    /**
     * @example 10211123
     *
     * @var int
     */
    public $publishObjectId;
    protected $_name = [
        'publishObjectId' => 'PublishObjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->publishObjectId) {
            $res['PublishObjectId'] = $this->publishObjectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return offlineResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PublishObjectId'])) {
            $model->publishObjectId = $map['PublishObjectId'];
        }

        return $model;
    }
}
