<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class UpdateStatusShrinkRequest extends Model
{
    /**
     * @example APP_PBKT0MFBEBTDO8T7SLVP
     *
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $errorLinesShrink;

    /**
     * @example seq-123
     *
     * @var string
     */
    public $importSequence;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @example hexxxx
     *
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType'          => 'AppType',
        'errorLinesShrink' => 'ErrorLines',
        'importSequence'   => 'ImportSequence',
        'language'         => 'Language',
        'status'           => 'Status',
        'systemToken'      => 'SystemToken',
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
        if (null !== $this->errorLinesShrink) {
            $res['ErrorLines'] = $this->errorLinesShrink;
        }
        if (null !== $this->importSequence) {
            $res['ImportSequence'] = $this->importSequence;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStatusShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['ErrorLines'])) {
            $model->errorLinesShrink = $map['ErrorLines'];
        }
        if (isset($map['ImportSequence'])) {
            $model->importSequence = $map['ImportSequence'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
