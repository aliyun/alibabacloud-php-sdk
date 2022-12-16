<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\CreateInstanceRequest\networkInfo;

use AlibabaCloud\Tea\Model;

class internetInfo extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $flowOutBandwidth;

    /**
     * @example uninvolved
     *
     * @var string
     */
    public $flowOutType;

    /**
     * @example disable
     *
     * @var string
     */
    public $internetSpec;

    /**
     * @var string[]
     */
    public $ipWhitelist;
    protected $_name = [
        'flowOutBandwidth' => 'flowOutBandwidth',
        'flowOutType'      => 'flowOutType',
        'internetSpec'     => 'internetSpec',
        'ipWhitelist'      => 'ipWhitelist',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowOutBandwidth) {
            $res['flowOutBandwidth'] = $this->flowOutBandwidth;
        }
        if (null !== $this->flowOutType) {
            $res['flowOutType'] = $this->flowOutType;
        }
        if (null !== $this->internetSpec) {
            $res['internetSpec'] = $this->internetSpec;
        }
        if (null !== $this->ipWhitelist) {
            $res['ipWhitelist'] = $this->ipWhitelist;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return internetInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['flowOutBandwidth'])) {
            $model->flowOutBandwidth = $map['flowOutBandwidth'];
        }
        if (isset($map['flowOutType'])) {
            $model->flowOutType = $map['flowOutType'];
        }
        if (isset($map['internetSpec'])) {
            $model->internetSpec = $map['internetSpec'];
        }
        if (isset($map['ipWhitelist'])) {
            if (!empty($map['ipWhitelist'])) {
                $model->ipWhitelist = $map['ipWhitelist'];
            }
        }

        return $model;
    }
}
