<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class Quota extends Model
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
    public $orderType;

    /**
     * @var string
     */
    public $spec;
    protected $_name = [
        'computeResource' => 'computeResource',
        'docSize'         => 'docSize',
        'orderType'       => 'orderType',
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
        if (null !== $this->orderType) {
            $res['orderType'] = $this->orderType;
        }
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Quota
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
        if (isset($map['orderType'])) {
            $model->orderType = $map['orderType'];
        }
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        return $model;
    }
}
