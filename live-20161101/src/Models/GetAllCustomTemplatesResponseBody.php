<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class GetAllCustomTemplatesResponseBody extends Model
{
    /**
     * @description The template names and template configurations returned.
     *
     * @example [{"templateConfig": "{\\"cdesc\\":\\"H264\\",\\"scale\\":\\"[3:4]\\",\\"gop\\":\\"1\\",\\"bframes\\":\\"1\\",\\"height\\":\\"1080\\"}","templateName": "custom1"},{"templateConfig": "{\\"ar\\":\\"44100\\",\\"cdesc\\":\\"H264\\",\\"scale\\":\\"[3:4]\\",\\"gop\\":\\"1\\",\\"bframes\\":\\"1\\",\\"height\\":\\"1080\\"}","templateName": "cus"}]
     *
     * @var string
     */
    public $customTemplates;

    /**
     * @description The request ID.
     *
     * @example 4791648Q-813C-6254-865C-0ED913661230
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'customTemplates' => 'CustomTemplates',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customTemplates) {
            $res['CustomTemplates'] = $this->customTemplates;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAllCustomTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomTemplates'])) {
            $model->customTemplates = $map['CustomTemplates'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
