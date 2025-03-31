<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetPurgeQuotaResponseBody extends Model
{
    /**
     * @var string
     */
    public $quota;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'quota' => 'Quota',
        'requestId' => 'RequestId',
        'usage' => 'Usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
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
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
