<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class UnblockSendingRequest extends Model
{
    /**
     * @description Blacklisted recipient\\"s email address
     *
     * This parameter is required.
     *
     * @example recipient@example.com
     *
     * @var string
     */
    public $blockEmail;

    /**
     * @description Blacklist type
     * - UNSUB: Unsubscribe
     * - REPORT: Report
     *
     * This parameter is required.
     *
     * @example UNSUB
     *
     * @var string
     */
    public $blockType;

    /**
     * @description Sender\\"s email address
     *
     * This parameter is required.
     *
     * @example sender@example.com
     *
     * @var string
     */
    public $senderEmail;
    protected $_name = [
        'blockEmail' => 'BlockEmail',
        'blockType' => 'BlockType',
        'senderEmail' => 'SenderEmail',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockEmail) {
            $res['BlockEmail'] = $this->blockEmail;
        }
        if (null !== $this->blockType) {
            $res['BlockType'] = $this->blockType;
        }
        if (null !== $this->senderEmail) {
            $res['SenderEmail'] = $this->senderEmail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnblockSendingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockEmail'])) {
            $model->blockEmail = $map['BlockEmail'];
        }
        if (isset($map['BlockType'])) {
            $model->blockType = $map['BlockType'];
        }
        if (isset($map['SenderEmail'])) {
            $model->senderEmail = $map['SenderEmail'];
        }

        return $model;
    }
}
