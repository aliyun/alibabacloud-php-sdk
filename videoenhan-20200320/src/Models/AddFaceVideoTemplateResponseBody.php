<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videoenhan\V20200320\Models;

use AlibabaCloud\SDK\Videoenhan\V20200320\Models\AddFaceVideoTemplateResponseBody\date;
use AlibabaCloud\Tea\Model;

class AddFaceVideoTemplateResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;

    /**
     * @var date
     */
    public $date;
    protected $_name = [
        'requestId' => 'RequestId',
        'date'      => 'Date',
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
        if (null !== $this->date) {
            $res['Date'] = null !== $this->date ? $this->date->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddFaceVideoTemplateResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Date'])) {
            $model->date = date::fromMap($map['Date']);
        }

        return $model;
    }
}
