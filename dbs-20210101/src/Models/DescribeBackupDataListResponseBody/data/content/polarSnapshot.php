<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupDataListResponseBody\data\content;

use AlibabaCloud\Dara\Model;

class polarSnapshot extends Model
{
    /**
     * @var int
     */
    public $dumpId;

    /**
     * @var int
     */
    public $dumpSize;

    /**
     * @var string
     */
    public $expectExpireTime;

    /**
     * @var string
     */
    public $expectExpireType;
    protected $_name = [
        'dumpId' => 'DumpId',
        'dumpSize' => 'DumpSize',
        'expectExpireTime' => 'ExpectExpireTime',
        'expectExpireType' => 'expectExpireType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dumpId) {
            $res['DumpId'] = $this->dumpId;
        }

        if (null !== $this->dumpSize) {
            $res['DumpSize'] = $this->dumpSize;
        }

        if (null !== $this->expectExpireTime) {
            $res['ExpectExpireTime'] = $this->expectExpireTime;
        }

        if (null !== $this->expectExpireType) {
            $res['expectExpireType'] = $this->expectExpireType;
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
        if (isset($map['DumpId'])) {
            $model->dumpId = $map['DumpId'];
        }

        if (isset($map['DumpSize'])) {
            $model->dumpSize = $map['DumpSize'];
        }

        if (isset($map['ExpectExpireTime'])) {
            $model->expectExpireTime = $map['ExpectExpireTime'];
        }

        if (isset($map['expectExpireType'])) {
            $model->expectExpireType = $map['expectExpireType'];
        }

        return $model;
    }
}
