<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddCustomLineRequest\ipSegment;
use AlibabaCloud\Tea\Model;

class AddCustomLineRequest extends Model
{
    /**
     * @description The domain name for which you configure the custom line.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var ipSegment[]
     */
    public $ipSegment;

    /**
     * @description The language type.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the custom line.
     *
     * @var string
     */
    public $lineName;
    protected $_name = [
        'domainName' => 'DomainName',
        'ipSegment'  => 'IpSegment',
        'lang'       => 'Lang',
        'lineName'   => 'LineName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ipSegment) {
            $res['IpSegment'] = [];
            if (null !== $this->ipSegment && \is_array($this->ipSegment)) {
                $n = 0;
                foreach ($this->ipSegment as $item) {
                    $res['IpSegment'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->lineName) {
            $res['LineName'] = $this->lineName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddCustomLineRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['IpSegment'])) {
            if (!empty($map['IpSegment'])) {
                $model->ipSegment = [];
                $n                = 0;
                foreach ($map['IpSegment'] as $item) {
                    $model->ipSegment[$n++] = null !== $item ? ipSegment::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['LineName'])) {
            $model->lineName = $map['LineName'];
        }

        return $model;
    }
}
