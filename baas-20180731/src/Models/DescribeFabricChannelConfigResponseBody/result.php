<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeFabricChannelConfigResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $absoluteMaxBytes;

    /**
     * @var string
     */
    public $batchTimeout;

    /**
     * @var int
     */
    public $maxMessageCount;

    /**
     * @var int
     */
    public $preferredMaxBytes;
    protected $_name = [
        'absoluteMaxBytes'  => 'AbsoluteMaxBytes',
        'batchTimeout'      => 'BatchTimeout',
        'maxMessageCount'   => 'MaxMessageCount',
        'preferredMaxBytes' => 'PreferredMaxBytes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->absoluteMaxBytes) {
            $res['AbsoluteMaxBytes'] = $this->absoluteMaxBytes;
        }
        if (null !== $this->batchTimeout) {
            $res['BatchTimeout'] = $this->batchTimeout;
        }
        if (null !== $this->maxMessageCount) {
            $res['MaxMessageCount'] = $this->maxMessageCount;
        }
        if (null !== $this->preferredMaxBytes) {
            $res['PreferredMaxBytes'] = $this->preferredMaxBytes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbsoluteMaxBytes'])) {
            $model->absoluteMaxBytes = $map['AbsoluteMaxBytes'];
        }
        if (isset($map['BatchTimeout'])) {
            $model->batchTimeout = $map['BatchTimeout'];
        }
        if (isset($map['MaxMessageCount'])) {
            $model->maxMessageCount = $map['MaxMessageCount'];
        }
        if (isset($map['PreferredMaxBytes'])) {
            $model->preferredMaxBytes = $map['PreferredMaxBytes'];
        }

        return $model;
    }
}
