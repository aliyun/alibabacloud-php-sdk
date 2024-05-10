<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetOpenUrlRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example APP_PBKT0xxx
     *
     * @var string
     */
    public $appType;

    /**
     * @description This parameter is required.
     *
     * @example https://www.aliwork.com/fileHandle?appType=APP_VN7I6xxx&fileName=fileName.xlsx&instId=&type=download
     *
     * @var string
     */
    public $fileUrl;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @description This parameter is required.
     *
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;

    /**
     * @example 60000L
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appType'     => 'AppType',
        'fileUrl'     => 'FileUrl',
        'language'    => 'Language',
        'systemToken' => 'SystemToken',
        'timeout'     => 'Timeout',
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
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpenUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
