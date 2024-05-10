<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetRunningTasksRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example APP_PBKxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example zh-CN
     *
     * @var string
     */
    public $language;

    /**
     * @example ["xx","xxx"]
     *
     * @var string
     */
    public $processCodes;

    /**
     * @example instxxxxx
     *
     * @var string
     */
    public $processInstanceId;

    /**
     * @description This parameter is required.
     *
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'           => 'AppType',
        'language'          => 'Language',
        'processCodes'      => 'ProcessCodes',
        'processInstanceId' => 'ProcessInstanceId',
        'systemToken'       => 'SystemToken',
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
        if (null !== $this->processCodes) {
            $res['ProcessCodes'] = $this->processCodes;
        }
        if (null !== $this->processInstanceId) {
            $res['ProcessInstanceId'] = $this->processInstanceId;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRunningTasksRequest
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
        if (isset($map['ProcessCodes'])) {
            $model->processCodes = $map['ProcessCodes'];
        }
        if (isset($map['ProcessInstanceId'])) {
            $model->processInstanceId = $map['ProcessInstanceId'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
