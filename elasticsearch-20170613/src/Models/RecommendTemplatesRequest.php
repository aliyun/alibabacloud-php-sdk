<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class RecommendTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string
     */
    public $usageScenario;
    protected $_name = [
        'body'          => 'body',
        'usageScenario' => 'usageScenario',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->usageScenario) {
            $res['usageScenario'] = $this->usageScenario;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecommendTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['usageScenario'])) {
            $model->usageScenario = $map['usageScenario'];
        }

        return $model;
    }
}
