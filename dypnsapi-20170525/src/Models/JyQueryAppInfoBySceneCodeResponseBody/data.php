<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypnsapi\V20170525\Models\JyQueryAppInfoBySceneCodeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cmAppId;

    /**
     * @var string
     */
    public $cmAppKey;

    /**
     * @var string
     */
    public $ctAppId;

    /**
     * @var string
     */
    public $ctAppKey;
    protected $_name = [
        'cmAppId'  => 'CmAppId',
        'cmAppKey' => 'CmAppKey',
        'ctAppId'  => 'CtAppId',
        'ctAppKey' => 'CtAppKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmAppId) {
            $res['CmAppId'] = $this->cmAppId;
        }
        if (null !== $this->cmAppKey) {
            $res['CmAppKey'] = $this->cmAppKey;
        }
        if (null !== $this->ctAppId) {
            $res['CtAppId'] = $this->ctAppId;
        }
        if (null !== $this->ctAppKey) {
            $res['CtAppKey'] = $this->ctAppKey;
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
        if (isset($map['CmAppId'])) {
            $model->cmAppId = $map['CmAppId'];
        }
        if (isset($map['CmAppKey'])) {
            $model->cmAppKey = $map['CmAppKey'];
        }
        if (isset($map['CtAppId'])) {
            $model->ctAppId = $map['CtAppId'];
        }
        if (isset($map['CtAppKey'])) {
            $model->ctAppKey = $map['CtAppKey'];
        }

        return $model;
    }
}
