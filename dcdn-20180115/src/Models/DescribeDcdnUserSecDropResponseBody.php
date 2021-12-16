<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnUserSecDropResponseBody extends Model
{
    /**
     * @var int
     */
    public $drops;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $uuidStr;
    protected $_name = [
        'drops'     => 'Drops',
        'msg'       => 'Msg',
        'requestId' => 'RequestId',
        'uuidStr'   => 'UuidStr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drops) {
            $res['Drops'] = $this->drops;
        }
        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uuidStr) {
            $res['UuidStr'] = $this->uuidStr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnUserSecDropResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Drops'])) {
            $model->drops = $map['Drops'];
        }
        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UuidStr'])) {
            $model->uuidStr = $map['UuidStr'];
        }

        return $model;
    }
}
