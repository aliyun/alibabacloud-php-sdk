<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetActivityListRequest extends Model
{
    /**
     * @example APP_PBxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @example TPROC--X1Gxx
     *
     * @var string
     */
    public $processCode;

    /**
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'     => 'AppType',
        'language'    => 'Language',
        'processCode' => 'ProcessCode',
        'systemToken' => 'SystemToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->processCode) {
            $res['ProcessCode'] = $this->processCode;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetActivityListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['ProcessCode'])) {
            $model->processCode = $map['ProcessCode'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
