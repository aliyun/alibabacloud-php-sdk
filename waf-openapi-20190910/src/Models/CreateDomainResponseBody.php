<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CreateDomainResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $cname;
    protected $_name = [
        'requestId' => 'RequestId',
        'cname'     => 'Cname',
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
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDomainResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }

        return $model;
    }
}
