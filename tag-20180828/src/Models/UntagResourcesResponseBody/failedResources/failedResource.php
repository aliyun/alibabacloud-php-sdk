<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models\UntagResourcesResponseBody\failedResources;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Tag\V20180828\Models\UntagResourcesResponseBody\failedResources\failedResource\result;

class failedResource extends Model
{
    /**
     * @var string
     */
    public $resourceARN;

    /**
     * @var result
     */
    public $result;
    protected $_name = [
        'resourceARN' => 'ResourceARN',
        'result' => 'Result',
    ];

    public function validate()
    {
        if (null !== $this->result) {
            $this->result->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceARN) {
            $res['ResourceARN'] = $this->resourceARN;
        }

        if (null !== $this->result) {
            $res['Result'] = null !== $this->result ? $this->result->toArray($noStream) : $this->result;
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
        if (isset($map['ResourceARN'])) {
            $model->resourceARN = $map['ResourceARN'];
        }

        if (isset($map['Result'])) {
            $model->result = result::fromMap($map['Result']);
        }

        return $model;
    }
}
