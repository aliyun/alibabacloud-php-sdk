<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class ListPipelineTemplatesRequest extends Model
{
    /**
     * @var string[]
     */
    public $labelSelector;
    protected $_name = [
        'labelSelector' => 'labelSelector',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->labelSelector) {
            $res['labelSelector'] = $this->labelSelector;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPipelineTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['labelSelector'])) {
            if (!empty($map['labelSelector'])) {
                $model->labelSelector = $map['labelSelector'];
            }
        }

        return $model;
    }
}
