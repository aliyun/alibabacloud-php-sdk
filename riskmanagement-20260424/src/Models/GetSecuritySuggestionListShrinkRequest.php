<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class GetSecuritySuggestionListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $listConfigRulesRequestShrink;
    protected $_name = [
        'listConfigRulesRequestShrink' => 'ListConfigRulesRequest',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listConfigRulesRequestShrink) {
            $res['ListConfigRulesRequest'] = $this->listConfigRulesRequestShrink;
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
        if (isset($map['ListConfigRulesRequest'])) {
            $model->listConfigRulesRequestShrink = $map['ListConfigRulesRequest'];
        }

        return $model;
    }
}
