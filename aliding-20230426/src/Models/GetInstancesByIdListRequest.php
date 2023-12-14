<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetInstancesByIdListRequest extends Model
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
     * @example inst-123,inst-223
     *
     * @var string
     */
    public $processInstanceIds;

    /**
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'            => 'AppType',
        'language'           => 'Language',
        'processInstanceIds' => 'ProcessInstanceIds',
        'systemToken'        => 'SystemToken',
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
        if (null !== $this->processInstanceIds) {
            $res['ProcessInstanceIds'] = $this->processInstanceIds;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstancesByIdListRequest
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
        if (isset($map['ProcessInstanceIds'])) {
            $model->processInstanceIds = $map['ProcessInstanceIds'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
