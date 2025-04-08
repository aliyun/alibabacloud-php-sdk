<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListLogContentsResponseBody\listLogContent;

class ListLogContentsResponseBody extends Model
{
    /**
     * @var listLogContent
     */
    public $listLogContent;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'listLogContent' => 'listLogContent',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->listLogContent) {
            $this->listLogContent->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listLogContent) {
            $res['listLogContent'] = null !== $this->listLogContent ? $this->listLogContent->toArray($noStream) : $this->listLogContent;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['listLogContent'])) {
            $model->listLogContent = listLogContent::fromMap($map['listLogContent']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
