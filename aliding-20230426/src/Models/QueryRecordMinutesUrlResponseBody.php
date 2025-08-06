<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\QueryRecordMinutesUrlResponseBody\recordMinutesUrls;

class QueryRecordMinutesUrlResponseBody extends Model
{
    /**
     * @var recordMinutesUrls[]
     */
    public $recordMinutesUrls;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $vendorRequestId;

    /**
     * @var string
     */
    public $vendorType;
    protected $_name = [
        'recordMinutesUrls' => 'recordMinutesUrls',
        'requestId' => 'requestId',
        'vendorRequestId' => 'vendorRequestId',
        'vendorType' => 'vendorType',
    ];

    public function validate()
    {
        if (\is_array($this->recordMinutesUrls)) {
            Model::validateArray($this->recordMinutesUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordMinutesUrls) {
            if (\is_array($this->recordMinutesUrls)) {
                $res['recordMinutesUrls'] = [];
                $n1 = 0;
                foreach ($this->recordMinutesUrls as $item1) {
                    $res['recordMinutesUrls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->vendorRequestId) {
            $res['vendorRequestId'] = $this->vendorRequestId;
        }

        if (null !== $this->vendorType) {
            $res['vendorType'] = $this->vendorType;
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
        if (isset($map['recordMinutesUrls'])) {
            if (!empty($map['recordMinutesUrls'])) {
                $model->recordMinutesUrls = [];
                $n1 = 0;
                foreach ($map['recordMinutesUrls'] as $item1) {
                    $model->recordMinutesUrls[$n1] = recordMinutesUrls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['vendorRequestId'])) {
            $model->vendorRequestId = $map['vendorRequestId'];
        }

        if (isset($map['vendorType'])) {
            $model->vendorType = $map['vendorType'];
        }

        return $model;
    }
}
