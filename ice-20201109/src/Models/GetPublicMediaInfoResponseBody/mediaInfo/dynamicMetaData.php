<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetPublicMediaInfoResponseBody\mediaInfo;

use AlibabaCloud\Tea\Model;

class dynamicMetaData extends Model
{
    /**
     * @example {"AuditionUrl": "http://example-bucket.cdn.domain.com/example.mp4", "AuditionCount": 3}
     *
     * @var string
     */
    public $data;

    /**
     * @example system
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'data' => 'Data',
        'type' => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dynamicMetaData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
