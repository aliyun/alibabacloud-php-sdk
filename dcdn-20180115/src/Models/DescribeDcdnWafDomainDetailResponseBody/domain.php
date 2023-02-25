<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainDetailResponseBody;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainDetailResponseBody\domain\defenseScenes;
use AlibabaCloud\Tea\Model;

class domain extends Model
{
    /**
     * @description The types of the protection policies.
     *
     * @var defenseScenes[]
     */
    public $defenseScenes;

    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;
    protected $_name = [
        'defenseScenes' => 'DefenseScenes',
        'domainName'    => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defenseScenes) {
            $res['DefenseScenes'] = [];
            if (null !== $this->defenseScenes && \is_array($this->defenseScenes)) {
                $n = 0;
                foreach ($this->defenseScenes as $item) {
                    $res['DefenseScenes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScenes'])) {
            if (!empty($map['DefenseScenes'])) {
                $model->defenseScenes = [];
                $n                    = 0;
                foreach ($map['DefenseScenes'] as $item) {
                    $model->defenseScenes[$n++] = null !== $item ? defenseScenes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
