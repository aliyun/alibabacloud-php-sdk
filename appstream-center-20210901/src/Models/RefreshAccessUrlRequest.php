<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class RefreshAccessUrlRequest extends Model
{
    /**
     * @example a-062wec3cwmayw****
     *
     * @var string
     */
    public $accessPageId;
    protected $_name = [
        'accessPageId' => 'AccessPageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPageId) {
            $res['AccessPageId'] = $this->accessPageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshAccessUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPageId'])) {
            $model->accessPageId = $map['AccessPageId'];
        }

        return $model;
    }
}
