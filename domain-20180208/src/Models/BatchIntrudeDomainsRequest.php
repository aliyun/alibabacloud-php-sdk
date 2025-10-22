<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;

class BatchIntrudeDomainsRequest extends Model
{
    /**
     * @var string[]
     */
    public $domainNames;
    protected $_name = [
        'domainNames' => 'DomainNames',
    ];

    public function validate()
    {
        if (\is_array($this->domainNames)) {
            Model::validateArray($this->domainNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainNames) {
            if (\is_array($this->domainNames)) {
                $res['DomainNames'] = [];
                $n1 = 0;
                foreach ($this->domainNames as $item1) {
                    $res['DomainNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DomainNames'])) {
            if (!empty($map['DomainNames'])) {
                $model->domainNames = [];
                $n1 = 0;
                foreach ($map['DomainNames'] as $item1) {
                    $model->domainNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
