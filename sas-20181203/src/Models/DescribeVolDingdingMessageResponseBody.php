<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVolDingdingMessageResponseBody extends Model
{
    /**
     * @description The QR code address of the DingTalk group.
     *
     * @example https://www.wikihow.com/images_en/thumb/4/48/Get-the-URL-for-Pictures-Step-4-Version-4.jpg/v4-728px-Get-the-URL-for-Pictures-Step-4-Version-4.jpg.webp
     *
     * @var string
     */
    public $dingdingUrl;

    /**
     * @description The request ID.
     *
     * @example 7A437E93-47EE-548F-ABCE-13F89AA85585
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dingdingUrl' => 'DingdingUrl',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingdingUrl) {
            $res['DingdingUrl'] = $this->dingdingUrl;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVolDingdingMessageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingdingUrl'])) {
            $model->dingdingUrl = $map['DingdingUrl'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
