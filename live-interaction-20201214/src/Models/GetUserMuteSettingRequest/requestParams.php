<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetUserMuteSettingRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @var string[]
     */
    public $appUids;
    protected $_name = [
        'appUids' => 'AppUids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appUids) {
            $res['AppUids'] = $this->appUids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppUids'])) {
            if (!empty($map['AppUids'])) {
                $model->appUids = $map['AppUids'];
            }
        }

        return $model;
    }
}
