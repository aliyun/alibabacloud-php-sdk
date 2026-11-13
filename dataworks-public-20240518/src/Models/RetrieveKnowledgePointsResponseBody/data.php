<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RetrieveKnowledgePointsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RetrieveKnowledgePointsResponseBody\data\ambiguities;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RetrieveKnowledgePointsResponseBody\data\paths;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RetrieveKnowledgePointsResponseBody\data\results;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\RetrieveKnowledgePointsResponseBody\data\warnings;

class data extends Model
{
    /**
     * @var ambiguities[]
     */
    public $ambiguities;

    /**
     * @var paths[]
     */
    public $paths;

    /**
     * @var results[]
     */
    public $results;

    /**
     * @var warnings[]
     */
    public $warnings;
    protected $_name = [
        'ambiguities' => 'Ambiguities',
        'paths' => 'Paths',
        'results' => 'Results',
        'warnings' => 'Warnings',
    ];

    public function validate()
    {
        if (\is_array($this->ambiguities)) {
            Model::validateArray($this->ambiguities);
        }
        if (\is_array($this->paths)) {
            Model::validateArray($this->paths);
        }
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        if (\is_array($this->warnings)) {
            Model::validateArray($this->warnings);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ambiguities) {
            if (\is_array($this->ambiguities)) {
                $res['Ambiguities'] = [];
                $n1 = 0;
                foreach ($this->ambiguities as $item1) {
                    $res['Ambiguities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->paths) {
            if (\is_array($this->paths)) {
                $res['Paths'] = [];
                $n1 = 0;
                foreach ($this->paths as $item1) {
                    $res['Paths'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['Results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['Results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->warnings) {
            if (\is_array($this->warnings)) {
                $res['Warnings'] = [];
                $n1 = 0;
                foreach ($this->warnings as $item1) {
                    $res['Warnings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ambiguities'])) {
            if (!empty($map['Ambiguities'])) {
                $model->ambiguities = [];
                $n1 = 0;
                foreach ($map['Ambiguities'] as $item1) {
                    $model->ambiguities[$n1] = ambiguities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Paths'])) {
            if (!empty($map['Paths'])) {
                $model->paths = [];
                $n1 = 0;
                foreach ($map['Paths'] as $item1) {
                    $model->paths[$n1] = paths::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['Results'] as $item1) {
                    $model->results[$n1] = results::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Warnings'])) {
            if (!empty($map['Warnings'])) {
                $model->warnings = [];
                $n1 = 0;
                foreach ($map['Warnings'] as $item1) {
                    $model->warnings[$n1] = warnings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
