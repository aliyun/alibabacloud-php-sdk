<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ModifyAppGroupResponseBody\result;

use AlibabaCloud\Tea\Model;

class quota extends Model
{
    /**
     * @var int
     */
    public $computeResource;

    /**
     * @var int
     */
    public $docSize;

    /**
     * @var string
     */
    public $spec;
    protected $_name = [
        'computeResource' => 'computeResource',
        'docSize'         => 'docSize',
        'spec'            => 'spec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->computeResource) {
            $res['computeResource'] = $this->computeResource;
        }
        if (null !== $this->docSize) {
            $res['docSize'] = $this->docSize;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return quota
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['computeResource'])) {
            $model->computeResource = $map['computeResource'];
        }
        if (isset($map['docSize'])) {
            $model->docSize = $map['docSize'];
        }
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        return $model;
    }
}
