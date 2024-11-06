<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsResponseBody\listLogContent;
use AlibabaCloud\Tea\Model;

class ListLogContentsResponseBody extends Model
{
    /**
     * @var listLogContent
     */
    public $listLogContent;

    /**
     * @description 请求ID。
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C8944****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'listLogContent' => 'listLogContent',
        'requestId'      => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listLogContent) {
            $res['listLogContent'] = null !== $this->listLogContent ? $this->listLogContent->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogContentsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['listLogContent'])) {
            $model->listLogContent = listLogContent::fromMap($map['listLogContent']);
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
