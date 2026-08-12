<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\PreviewDataPipelineResponseBody\datasets;

class PreviewDataPipelineResponseBody extends Model
{
    /**
     * @var datasets[]
     */
    public $datasets;

    /**
     * @var string
     */
    public $effectiveScript;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'datasets' => 'datasets',
        'effectiveScript' => 'effectiveScript',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->datasets)) {
            Model::validateArray($this->datasets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->datasets) {
            if (\is_array($this->datasets)) {
                $res['datasets'] = [];
                $n1 = 0;
                foreach ($this->datasets as $item1) {
                    $res['datasets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->effectiveScript) {
            $res['effectiveScript'] = $this->effectiveScript;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['datasets'])) {
            if (!empty($map['datasets'])) {
                $model->datasets = [];
                $n1 = 0;
                foreach ($map['datasets'] as $item1) {
                    $model->datasets[$n1] = datasets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['effectiveScript'])) {
            $model->effectiveScript = $map['effectiveScript'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
