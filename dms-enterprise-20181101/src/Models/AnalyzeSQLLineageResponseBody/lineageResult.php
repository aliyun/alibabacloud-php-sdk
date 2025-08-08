<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult\lineages;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult\objectMetadata;

class lineageResult extends Model
{
    /**
     * @var lineages[]
     */
    public $lineages;

    /**
     * @var objectMetadata[]
     */
    public $objectMetadata;
    protected $_name = [
        'lineages' => 'Lineages',
        'objectMetadata' => 'ObjectMetadata',
    ];

    public function validate()
    {
        if (\is_array($this->lineages)) {
            Model::validateArray($this->lineages);
        }
        if (\is_array($this->objectMetadata)) {
            Model::validateArray($this->objectMetadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lineages) {
            if (\is_array($this->lineages)) {
                $res['Lineages'] = [];
                $n1 = 0;
                foreach ($this->lineages as $item1) {
                    $res['Lineages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->objectMetadata) {
            if (\is_array($this->objectMetadata)) {
                $res['ObjectMetadata'] = [];
                $n1 = 0;
                foreach ($this->objectMetadata as $item1) {
                    $res['ObjectMetadata'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Lineages'])) {
            if (!empty($map['Lineages'])) {
                $model->lineages = [];
                $n1 = 0;
                foreach ($map['Lineages'] as $item1) {
                    $model->lineages[$n1] = lineages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ObjectMetadata'])) {
            if (!empty($map['ObjectMetadata'])) {
                $model->objectMetadata = [];
                $n1 = 0;
                foreach ($map['ObjectMetadata'] as $item1) {
                    $model->objectMetadata[$n1] = objectMetadata::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
