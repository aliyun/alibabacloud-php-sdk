<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RiskManagement\V20260424\Models\GetSecuritySuggestionListRequest\listConfigRulesRequest;

class GetSecuritySuggestionListRequest extends Model
{
    /**
     * @var listConfigRulesRequest
     */
    public $listConfigRulesRequest;
    protected $_name = [
        'listConfigRulesRequest' => 'ListConfigRulesRequest',
    ];

    public function validate()
    {
        if (null !== $this->listConfigRulesRequest) {
            $this->listConfigRulesRequest->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listConfigRulesRequest) {
            $res['ListConfigRulesRequest'] = null !== $this->listConfigRulesRequest ? $this->listConfigRulesRequest->toArray($noStream) : $this->listConfigRulesRequest;
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
            $model->listConfigRulesRequest = listConfigRulesRequest::fromMap($map['ListConfigRulesRequest']);
        }

        return $model;
    }
}
