<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cassandra\V20190101\Models;

use AlibabaCloud\Tea\Model;

class GetCmsUrlResponseBody extends Model
{
    /**
     * @example 6453F432-0141-4D35-B2BF-ADF199B39B07
     *
     * @var string
     */
    public $requestId;

    /**
     * @example https://cloudmonitor.console.aliyun.com?instanceId=cds-bp1l5ys68z98wzrc#/group/groupId=14680829&groupName=17926974****3449-cassandra/groupdashboard/cds//
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'requestId' => 'RequestId',
        'url'       => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCmsUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
