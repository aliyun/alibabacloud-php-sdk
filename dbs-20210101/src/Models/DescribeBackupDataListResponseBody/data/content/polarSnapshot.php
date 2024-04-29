<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupDataListResponseBody\data\content;

use AlibabaCloud\Tea\Model;

class polarSnapshot extends Model
{
    /**
     * @example abc****
     *
     * @var int
     */
    public $dumpId;

    /**
     * @example 25669140589
     *
     * @var int
     */
    public $dumpSize;

    /**
     * @example 2024-04-19T05:00:49Z
     *
     * @var string
     */
    public $expectExpireTime;

    /**
     * @example DELAY
     *
     * @var string
     */
    public $expectExpireType;
    protected $_name = [
        'dumpId'           => 'DumpId',
        'dumpSize'         => 'DumpSize',
        'expectExpireTime' => 'ExpectExpireTime',
        'expectExpireType' => 'expectExpireType',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return polarSnapshot
     */
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
