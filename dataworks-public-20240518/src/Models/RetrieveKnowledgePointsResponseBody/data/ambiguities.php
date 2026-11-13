<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RetrieveKnowledgePointsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RetrieveKnowledgePointsResponseBody\data\ambiguities\candidates;

class ambiguities extends Model
{
    /**
     * @var candidates[]
     */
    public $candidates;

    /**
     * @var string
     */
    public $mention;
    protected $_name = [
        'candidates' => 'Candidates',
        'mention' => 'Mention',
    ];

    public function validate()
    {
        if (\is_array($this->candidates)) {
            Model::validateArray($this->candidates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->candidates) {
            if (\is_array($this->candidates)) {
                $res['Candidates'] = [];
                $n1 = 0;
                foreach ($this->candidates as $item1) {
                    $res['Candidates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->mention) {
            $res['Mention'] = $this->mention;
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
        if (isset($map['Candidates'])) {
            if (!empty($map['Candidates'])) {
                $model->candidates = [];
                $n1 = 0;
                foreach ($map['Candidates'] as $item1) {
                    $model->candidates[$n1] = candidates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Mention'])) {
            $model->mention = $map['Mention'];
        }

        return $model;
    }
}
