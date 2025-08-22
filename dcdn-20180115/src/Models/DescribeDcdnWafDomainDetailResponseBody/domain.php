<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainDetailResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafDomainDetailResponseBody\domain\defenseScenes;

class domain extends Model
{
    /**
     * @var defenseScenes[]
     */
    public $defenseScenes;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'defenseScenes' => 'DefenseScenes',
        'domainName' => 'DomainName',
    ];

    public function validate()
    {
        if (\is_array($this->defenseScenes)) {
            Model::validateArray($this->defenseScenes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defenseScenes) {
            if (\is_array($this->defenseScenes)) {
                $res['DefenseScenes'] = [];
                $n1 = 0;
                foreach ($this->defenseScenes as $item1) {
                    $res['DefenseScenes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefenseScenes'])) {
            if (!empty($map['DefenseScenes'])) {
                $model->defenseScenes = [];
                $n1 = 0;
                foreach ($map['DefenseScenes'] as $item1) {
                    $model->defenseScenes[$n1] = defenseScenes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
