<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgeSourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListKnowledgeSourcesResponseBody\data\sources;

class data extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var sources[]
     */
    public $sources;
    protected $_name = [
        'nextToken' => 'NextToken',
        'sources' => 'Sources',
    ];

    public function validate()
    {
        if (\is_array($this->sources)) {
            Model::validateArray($this->sources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->sources) {
            if (\is_array($this->sources)) {
                $res['Sources'] = [];
                $n1 = 0;
                foreach ($this->sources as $item1) {
                    $res['Sources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['Sources'])) {
            if (!empty($map['Sources'])) {
                $model->sources = [];
                $n1 = 0;
                foreach ($map['Sources'] as $item1) {
                    $model->sources[$n1] = sources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
