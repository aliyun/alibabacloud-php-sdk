<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeAutoCcWhitelistResponseBody;

use AlibabaCloud\Tea\Model;

class autoCcWhitelist extends Model
{
    /**
     * @var string
     */
    public $type;

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
    public $destIp;
    protected $_name = [
        'type'     => 'Type',
        'endTime'  => 'EndTime',
        'sourceIp' => 'SourceIp',
        'destIp'   => 'DestIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->destIp) {
            $res['DestIp'] = $this->destIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoCcWhitelist
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['DestIp'])) {
            $model->destIp = $map['DestIp'];
        }

        return $model;
    }
}
