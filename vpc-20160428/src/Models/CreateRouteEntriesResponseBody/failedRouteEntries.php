<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateRouteEntriesResponseBody;

use AlibabaCloud\Dara\Model;

class failedRouteEntries extends Model
{
    /**
     * @var string
     */
    public $dstCidrBlock;
    /**
     * @var string
     */
    public $failedCode;
    /**
     * @var string
     */
    public $failedMessage;
    /**
     * @var string
     */
    public $nextHop;
    protected $_name = [
        'dstCidrBlock'  => 'DstCidrBlock',
        'failedCode'    => 'FailedCode',
        'failedMessage' => 'FailedMessage',
        'nextHop'       => 'NextHop',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dstCidrBlock) {
            $res['DstCidrBlock'] = $this->dstCidrBlock;
        }

        if (null !== $this->failedCode) {
            $res['FailedCode'] = $this->failedCode;
        }

        if (null !== $this->failedMessage) {
            $res['FailedMessage'] = $this->failedMessage;
        }

        if (null !== $this->nextHop) {
            $res['NextHop'] = $this->nextHop;
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
        if (isset($map['DstCidrBlock'])) {
            $model->dstCidrBlock = $map['DstCidrBlock'];
        }

        if (isset($map['FailedCode'])) {
            $model->failedCode = $map['FailedCode'];
        }

        if (isset($map['FailedMessage'])) {
            $model->failedMessage = $map['FailedMessage'];
        }

        if (isset($map['NextHop'])) {
            $model->nextHop = $map['NextHop'];
        }

        return $model;
    }
}
