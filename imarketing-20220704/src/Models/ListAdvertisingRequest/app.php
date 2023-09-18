<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListAdvertisingRequest;

use AlibabaCloud\Tea\Model;

class app extends Model
{
    /**
     * @var string
     */
    public $appid;

    /**
     * @var mixed[]
     */
    public $ext;

    /**
     * @var string
     */
    public $mediaid;

    /**
     * @var string
     */
    public $sn;
    protected $_name = [
        'appid'   => 'Appid',
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
        if (null !== $this->appid) {
            $res['Appid'] = $this->appid;
        }
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
        if (isset($map['Appid'])) {
            $model->appid = $map['Appid'];
        }
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
