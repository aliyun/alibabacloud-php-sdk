<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdRequest;

use AlibabaCloud\Tea\Model;

class app extends Model
{
    /**
     * @description ext
     *
     * @example {\"cxyAppName\":\"aliInstantAppMRCJ\",\"cxyUserType\":\"cxyAliInstantApp\",\"openId\":\"2088412404350201\",\"cxyUserId\":\"894464ABFC054B51AD971DFBDB97D9C0\"}
     *
     * @var mixed[]
     */
    public $ext;

    /**
     * @description mediaid
     *
     * @example 234546546
     *
     * @var string
     */
    public $mediaid;

    /**
     * @description sn
     *
     * @example testSn
     *
     * @var string
     */
    public $sn;
    protected $_name = [
        'ext'     => 'Ext',
        'mediaid' => 'Mediaid',
        'sn'      => 'Sn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ext) {
            $res['Ext'] = $this->ext;
        }
        if (null !== $this->mediaid) {
            $res['Mediaid'] = $this->mediaid;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return app
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Ext'])) {
            $model->ext = $map['Ext'];
        }
        if (isset($map['Mediaid'])) {
            $model->mediaid = $map['Mediaid'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        return $model;
    }
}
