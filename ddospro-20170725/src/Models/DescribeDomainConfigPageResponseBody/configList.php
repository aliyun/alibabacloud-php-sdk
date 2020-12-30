<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDomainConfigPageResponseBody;

use AlibabaCloud\SDK\DDoSPro\V20170725\Models\DescribeDomainConfigPageResponseBody\configList\instances;
use AlibabaCloud\Tea\Model;

class configList extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var instances[]
     */
    public $instances;
    protected $_name = [
        'domain'    => 'Domain',
        'cname'     => 'Cname',
        'instances' => 'Instances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->instances) {
            $res['Instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['Instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Instances'])) {
            if (!empty($map['Instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['Instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? instances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
