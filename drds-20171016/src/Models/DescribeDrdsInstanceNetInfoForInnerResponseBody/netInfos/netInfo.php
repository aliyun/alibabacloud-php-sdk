<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20171016\Models\DescribeDrdsInstanceNetInfoForInnerResponseBody\netInfos;

use AlibabaCloud\Tea\Model;

class netInfo extends Model
{
    /**
     * @var string
     */
    public $IP;

    /**
     * @var bool
     */
    public $isForVpc;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'IP'       => 'IP',
        'isForVpc' => 'IsForVpc',
        'port'     => 'Port',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->isForVpc) {
            $res['IsForVpc'] = $this->isForVpc;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['IsForVpc'])) {
            $model->isForVpc = $map['IsForVpc'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
