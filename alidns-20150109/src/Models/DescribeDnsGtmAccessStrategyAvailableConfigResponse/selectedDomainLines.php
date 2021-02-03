<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAccessStrategyAvailableConfigResponse;

use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('selectedDomainLine', $this->selectedDomainLine, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectedDomainLine) {
            $res['SelectedDomainLine'] = $this->selectedDomainLine;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return selectedDomainLines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SelectedDomainLine'])) {
            if (!empty($map['SelectedDomainLine'])) {
                $model->selectedDomainLine = $map['SelectedDomainLine'];
            }
        }

        return $model;
    }
}
