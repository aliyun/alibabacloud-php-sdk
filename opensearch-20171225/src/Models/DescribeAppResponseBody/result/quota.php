<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result;

use AlibabaCloud\Tea\Model;

class quota extends Model
{
    /**
     * @var string
     */
    public $spec;

    /**
     * @var int
     */
    public $qps;

    /**
     * @var int
     */
    public $docSize;

    /**
     * @var int
     */
    public $computeResource;
    protected $_name = [
        'spec'            => 'spec',
        'qps'             => 'qps',
        'docSize'         => 'docSize',
        'computeResource' => 'computeResource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
        }
        if (null !== $this->qps) {
            $res['qps'] = $this->qps;
        }
        if (null !== $this->docSize) {
            $res['docSize'] = $this->docSize;
        }
        if (null !== $this->computeResource) {
            $res['computeResource'] = $this->computeResource;
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
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }
        if (isset($map['qps'])) {
            $model->qps = $map['qps'];
        }
        if (isset($map['docSize'])) {
            $model->docSize = $map['docSize'];
        }
        if (isset($map['computeResource'])) {
            $model->computeResource = $map['computeResource'];
        }

        return $model;
    }
}
