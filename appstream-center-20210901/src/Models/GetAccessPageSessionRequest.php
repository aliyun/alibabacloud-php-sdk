<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class GetAccessPageSessionRequest extends Model
{
    /**
     * @var string
     */
    public $accessPageId;
    /**
     * @var string
     */
    public $accessPageToken;
    /**
     * @var string
     */
    public $externalUserId;
    protected $_name = [
        'accessPageId'    => 'AccessPageId',
        'accessPageToken' => 'AccessPageToken',
        'externalUserId'  => 'ExternalUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessPageId) {
            $res['AccessPageId'] = $this->accessPageId;
        }

        if (null !== $this->accessPageToken) {
            $res['AccessPageToken'] = $this->accessPageToken;
        }

        if (null !== $this->externalUserId) {
            $res['ExternalUserId'] = $this->externalUserId;
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
        if (isset($map['AccessPageId'])) {
            $model->accessPageId = $map['AccessPageId'];
        }

        if (isset($map['AccessPageToken'])) {
            $model->accessPageToken = $map['AccessPageToken'];
        }

        if (isset($map['ExternalUserId'])) {
            $model->externalUserId = $map['ExternalUserId'];
        }

        return $model;
    }
}
