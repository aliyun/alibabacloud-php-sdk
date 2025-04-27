<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class RecommendTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $usageScenario;
    protected $_name = [
        'usageScenario' => 'usageScenario',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->usageScenario) {
            $res['usageScenario'] = $this->usageScenario;
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
        if (isset($map['usageScenario'])) {
            $model->usageScenario = $map['usageScenario'];
        }

        return $model;
    }
}
