<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\textGenerateResult\generateTraceability\coordinates;

class generateTraceability extends Model
{
    /**
     * @var coordinates[]
     */
    public $coordinates;

    /**
     * @var float
     */
    public $duplicate;
    protected $_name = [
        'coordinates' => 'Coordinates',
        'duplicate' => 'Duplicate',
    ];

    public function validate()
    {
        if (\is_array($this->coordinates)) {
            Model::validateArray($this->coordinates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coordinates) {
            if (\is_array($this->coordinates)) {
                $res['Coordinates'] = [];
                $n1 = 0;
                foreach ($this->coordinates as $item1) {
                    $res['Coordinates'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->duplicate) {
            $res['Duplicate'] = $this->duplicate;
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
        if (isset($map['Coordinates'])) {
            if (!empty($map['Coordinates'])) {
                $model->coordinates = [];
                $n1 = 0;
                foreach ($map['Coordinates'] as $item1) {
                    $model->coordinates[$n1++] = coordinates::fromMap($item1);
                }
            }
        }

        if (isset($map['Duplicate'])) {
            $model->duplicate = $map['Duplicate'];
        }

        return $model;
    }
}
