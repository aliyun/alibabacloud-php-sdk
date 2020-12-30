<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models;

use AlibabaCloud\Tea\Model;

class DescribeDdosIpConfigRequest extends Model
{
    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $index;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $ips;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'lang'     => 'Lang',
        'index'    => 'Index',
        'pageSize' => 'PageSize',
        'ips'      => 'Ips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->ips) {
            $res['Ips'] = $this->ips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDdosIpConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Ips'])) {
            if (!empty($map['Ips'])) {
                $model->ips = $map['Ips'];
            }
        }

        return $model;
    }
}
