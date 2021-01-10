<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models;

use AlibabaCloud\Tea\Model;

class QueryDBBackupCollectionsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $collections;
    protected $_name = [
        'requestId'   => 'RequestId',
        'collections' => 'Collections',
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
        if (null !== $this->collections) {
            $res['Collections'] = $this->collections;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDBBackupCollectionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Collections'])) {
            if (!empty($map['Collections'])) {
                $model->collections = $map['Collections'];
            }
        }

        return $model;
    }
}
