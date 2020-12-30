<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcTunnelResponseBody;

use AlibabaCloud\Tea\Model;

class ccTunnel extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var bool
     */
    public $onlyAllow;

    /**
     * @var int
     */
    public $gray;
    protected $_name = [
        'status'    => 'Status',
        'onlyAllow' => 'OnlyAllow',
        'gray'      => 'Gray',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->onlyAllow) {
            $res['OnlyAllow'] = $this->onlyAllow;
        }
        if (null !== $this->gray) {
            $res['Gray'] = $this->gray;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ccTunnel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['OnlyAllow'])) {
            $model->onlyAllow = $map['OnlyAllow'];
        }
        if (isset($map['Gray'])) {
            $model->gray = $map['Gray'];
        }

        return $model;
    }
}
