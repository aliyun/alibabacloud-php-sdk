<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponseBody;

use AlibabaCloud\Dara\Model;

class selectedDomainLines extends Model
{
    /**
     * @var string[]
     */
    public $selectedDomainLine;
    protected $_name = [
        'selectedDomainLine' => 'SelectedDomainLine',
    ];

    public function validate()
    {
        if (\is_array($this->selectedDomainLine)) {
            Model::validateArray($this->selectedDomainLine);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->selectedDomainLine) {
            if (\is_array($this->selectedDomainLine)) {
                $res['SelectedDomainLine'] = [];
                $n1 = 0;
                foreach ($this->selectedDomainLine as $item1) {
                    $res['SelectedDomainLine'][$n1] = $item1;
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
        if (isset($map['SelectedDomainLine'])) {
            if (!empty($map['SelectedDomainLine'])) {
                $model->selectedDomainLine = [];
                $n1 = 0;
                foreach ($map['SelectedDomainLine'] as $item1) {
                    $model->selectedDomainLine[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
