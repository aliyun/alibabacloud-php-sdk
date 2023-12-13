<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerLogResponseBody extends Model
{
    /**
     * @description The container name.
     *
     * @example nginx
     *
     * @var string
     */
    public $containerName;

    /**
     * @description The content of the log.
     *
     * @example {}
     *
     * @var string
     */
    public $content;

    /**
     * @description The request ID.
     *
     * @example CA850ADA-****-4AC8-****-5B5990EAB7D0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'containerName' => 'ContainerName',
        'content'       => 'Content',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
