<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Tea\Model;

class GetResourceLinkResponseBody extends Model
{
    /**
     * @var string
     */
    public $link;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'link'      => 'link',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->link) {
            $res['link'] = $this->link;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceLinkResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['link'])) {
            $model->link = $map['link'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
