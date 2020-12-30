<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class AddDnatEntryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $dnatEntryId;
    protected $_name = [
        'requestId'   => 'RequestId',
        'dnatEntryId' => 'DnatEntryId',
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
        if (null !== $this->dnatEntryId) {
            $res['DnatEntryId'] = $this->dnatEntryId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDnatEntryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DnatEntryId'])) {
            $model->dnatEntryId = $map['DnatEntryId'];
        }

        return $model;
    }
}
