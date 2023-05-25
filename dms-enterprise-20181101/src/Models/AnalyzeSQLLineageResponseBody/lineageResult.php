<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult\lineages;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\AnalyzeSQLLineageResponseBody\lineageResult\objectMetadata;
use AlibabaCloud\Tea\Model;

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
        'lineages'       => 'Lineages',
        'objectMetadata' => 'ObjectMetadata',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineages) {
            $res['Lineages'] = [];
            if (null !== $this->lineages && \is_array($this->lineages)) {
                $n = 0;
                foreach ($this->lineages as $item) {
                    $res['Lineages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->objectMetadata) {
            $res['ObjectMetadata'] = [];
            if (null !== $this->objectMetadata && \is_array($this->objectMetadata)) {
                $n = 0;
                foreach ($this->objectMetadata as $item) {
                    $res['ObjectMetadata'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lineageResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lineages'])) {
            if (!empty($map['Lineages'])) {
                $model->lineages = [];
                $n               = 0;
                foreach ($map['Lineages'] as $item) {
                    $model->lineages[$n++] = null !== $item ? lineages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ObjectMetadata'])) {
            if (!empty($map['ObjectMetadata'])) {
                $model->objectMetadata = [];
                $n                     = 0;
                foreach ($map['ObjectMetadata'] as $item) {
                    $model->objectMetadata[$n++] = null !== $item ? objectMetadata::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
