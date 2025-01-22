<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRuleTemplatesResponseBody\pagingInfo\dataQualityRuleTemplates;

use AlibabaCloud\Dara\Model;

class checkingConfig extends Model
{
    /**
     * @var string
     */
    public $referencedSamplesFilter;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'referencedSamplesFilter' => 'ReferencedSamplesFilter',
        'type'                    => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->referencedSamplesFilter) {
            $res['ReferencedSamplesFilter'] = $this->referencedSamplesFilter;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ReferencedSamplesFilter'])) {
            $model->referencedSamplesFilter = $map['ReferencedSamplesFilter'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
