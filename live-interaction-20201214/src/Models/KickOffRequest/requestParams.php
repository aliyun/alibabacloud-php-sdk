<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\KickOffRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @var string[]
     */
    public $appKeys;

    /**
     * @example 950000010
     *
     * @var string
     */
    public $appUid;

    /**
     * @example 已被系统强制下线
     *
     * @var string
     */
    public $information;
    protected $_name = [
        'appKeys'     => 'AppKeys',
        'appUid'      => 'AppUid',
        'information' => 'Information',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKeys) {
            $res['AppKeys'] = $this->appKeys;
        }
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }
        if (null !== $this->information) {
            $res['Information'] = $this->information;
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
        if (isset($map['AppKeys'])) {
            if (!empty($map['AppKeys'])) {
                $model->appKeys = $map['AppKeys'];
            }
        }
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['Information'])) {
            $model->information = $map['Information'];
        }

        return $model;
    }
}
