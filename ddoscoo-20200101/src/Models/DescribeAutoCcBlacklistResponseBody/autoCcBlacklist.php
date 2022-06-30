<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcBlacklistResponseBody;

use AlibabaCloud\Tea\Model;

class autoCcBlacklist extends Model
{
    /**
     * @var string
     */
    public $destIp;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'destIp'   => 'DestIp',
        'endTime'  => 'EndTime',
        'sourceIp' => 'SourceIp',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destIp) {
            $res['DestIp'] = $this->destIp;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoCcBlacklist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestIp'])) {
            $model->destIp = $map['DestIp'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
