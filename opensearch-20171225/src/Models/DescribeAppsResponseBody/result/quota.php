<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppsResponseBody\result;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $qps;

    /**
     * @var string
     */
    public $spec;
    protected $_name = [
        'computeResource' => 'computeResource',
        'docSize' => 'docSize',
        'qps' => 'qps',
        'spec' => 'spec',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computeResource) {
            $res['computeResource'] = $this->computeResource;
        }

        if (null !== $this->docSize) {
            $res['docSize'] = $this->docSize;
        }

        if (null !== $this->qps) {
            $res['qps'] = $this->qps;
        }

        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
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
        if (isset($map['computeResource'])) {
            $model->computeResource = $map['computeResource'];
        }

        if (isset($map['docSize'])) {
            $model->docSize = $map['docSize'];
        }

        if (isset($map['qps'])) {
            $model->qps = $map['qps'];
        }

        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        return $model;
    }
}
