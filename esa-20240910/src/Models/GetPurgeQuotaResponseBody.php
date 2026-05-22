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
    public $quota30Day;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var string
     */
    public $usage30Day;
    protected $_name = [
        'quota' => 'Quota',
        'quota30Day' => 'Quota30Day',
        'requestId' => 'RequestId',
        'usage' => 'Usage',
        'usage30Day' => 'Usage30Day',
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

        if (null !== $this->quota30Day) {
            $res['Quota30Day'] = $this->quota30Day;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        if (null !== $this->usage30Day) {
            $res['Usage30Day'] = $this->usage30Day;
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

        if (isset($map['Quota30Day'])) {
            $model->quota30Day = $map['Quota30Day'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        if (isset($map['Usage30Day'])) {
            $model->usage30Day = $map['Usage30Day'];
        }

        return $model;
    }
}
