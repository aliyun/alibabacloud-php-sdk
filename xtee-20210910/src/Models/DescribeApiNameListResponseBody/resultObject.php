<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeApiNameListResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $apiName;
    protected $_name = [
        'apiId' => 'apiId',
        'apiName' => 'apiName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['apiId'] = $this->apiId;
        }

        if (null !== $this->apiName) {
            $res['apiName'] = $this->apiName;
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
        if (isset($map['apiId'])) {
            $model->apiId = $map['apiId'];
        }

        if (isset($map['apiName'])) {
            $model->apiName = $map['apiName'];
        }

        return $model;
    }
}
