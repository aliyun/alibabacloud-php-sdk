<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengverifyagent\V20240131\Models\QueryAppInfoBySchemeResponseBody;

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

    /**
     * @var string
     */
    public $cuAppId;

    /**
     * @var string
     */
    public $cuAppKey;

    /**
     * @var string
     */
    public $cuRsaPublickKey;
    protected $_name = [
        'cmAppId'         => 'cmAppId',
        'cmAppKey'        => 'cmAppKey',
        'ctAppId'         => 'ctAppId',
        'ctAppKey'        => 'ctAppKey',
        'cuAppId'         => 'cuAppId',
        'cuAppKey'        => 'cuAppKey',
        'cuRsaPublickKey' => 'cuRsaPublickKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmAppId) {
            $res['cmAppId'] = $this->cmAppId;
        }
        if (null !== $this->cmAppKey) {
            $res['cmAppKey'] = $this->cmAppKey;
        }
        if (null !== $this->ctAppId) {
            $res['ctAppId'] = $this->ctAppId;
        }
        if (null !== $this->ctAppKey) {
            $res['ctAppKey'] = $this->ctAppKey;
        }
        if (null !== $this->cuAppId) {
            $res['cuAppId'] = $this->cuAppId;
        }
        if (null !== $this->cuAppKey) {
            $res['cuAppKey'] = $this->cuAppKey;
        }
        if (null !== $this->cuRsaPublickKey) {
            $res['cuRsaPublickKey'] = $this->cuRsaPublickKey;
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
        if (isset($map['cmAppId'])) {
            $model->cmAppId = $map['cmAppId'];
        }
        if (isset($map['cmAppKey'])) {
            $model->cmAppKey = $map['cmAppKey'];
        }
        if (isset($map['ctAppId'])) {
            $model->ctAppId = $map['ctAppId'];
        }
        if (isset($map['ctAppKey'])) {
            $model->ctAppKey = $map['ctAppKey'];
        }
        if (isset($map['cuAppId'])) {
            $model->cuAppId = $map['cuAppId'];
        }
        if (isset($map['cuAppKey'])) {
            $model->cuAppKey = $map['cuAppKey'];
        }
        if (isset($map['cuRsaPublickKey'])) {
            $model->cuRsaPublickKey = $map['cuRsaPublickKey'];
        }

        return $model;
    }
}
