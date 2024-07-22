<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class GetAccessPageSessionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example a-062wec3cwmayw****
     *
     * @var string
     */
    public $accessPageId;

    /**
     * @description This parameter is required.
     *
     * @example 8141B1A674D48ACB8E5D2D6CE53FDB2F3CF8710A5F8F78578D5254BC6F******
     *
     * @var string
     */
    public $accessPageToken;

    /**
     * @example Banca******
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetAccessPageSessionRequest
     */
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
