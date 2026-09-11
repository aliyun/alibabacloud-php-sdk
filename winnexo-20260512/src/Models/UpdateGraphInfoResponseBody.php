<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class UpdateGraphInfoResponseBody extends Model
{
    /**
     * @var string
     */
    public $businessProfile;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $graphName;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $updated;
    protected $_name = [
        'businessProfile' => 'businessProfile',
        'code' => 'code',
        'displayName' => 'displayName',
        'graphName' => 'graphName',
        'message' => 'message',
        'requestId' => 'requestId',
        'updated' => 'updated',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->businessProfile) {
            $res['businessProfile'] = $this->businessProfile;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->displayName) {
            $res['displayName'] = $this->displayName;
        }

        if (null !== $this->graphName) {
            $res['graphName'] = $this->graphName;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['businessProfile'])) {
            $model->businessProfile = $map['businessProfile'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['displayName'])) {
            $model->displayName = $map['displayName'];
        }

        if (isset($map['graphName'])) {
            $model->graphName = $map['graphName'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }

        return $model;
    }
}
