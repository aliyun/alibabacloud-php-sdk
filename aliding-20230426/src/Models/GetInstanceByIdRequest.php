<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceByIdRequest extends Model
{
    /**
     * @example APP_PBxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example f30233fb-72e1-xxx
     *
     * @var string
     */
    public $id;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'     => 'AppType',
        'id'          => 'Id',
        'language'    => 'Language',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceByIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
