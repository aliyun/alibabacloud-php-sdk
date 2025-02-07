<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\WafBatchRuleShared;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\WafBatchRuleShared\actions\response;

class actions extends Model
{
    /**
     * @var response
     */
    public $response;
    protected $_name = [
        'response' => 'Response',
    ];

    public function validate()
    {
        if (null !== $this->response) {
            $this->response->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->response) {
            $res['Response'] = null !== $this->response ? $this->response->toArray($noStream) : $this->response;
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
        if (isset($map['Response'])) {
            $model->response = response::fromMap($map['Response']);
        }

        return $model;
    }
}
