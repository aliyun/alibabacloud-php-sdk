<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result;

use AlibabaCloud\Tea\Model;

class quota extends Model
{
    /**
     * @description The computing resources. Unit: logical computing units (LCUs).
     *
     * @example 20
     *
     * @var int
     */
    public $computeResource;

    /**
     * @description The storage capacity. Unit: GB.
     *
     * @example 1
     *
     * @var int
     */
    public $docSize;

    /**
     * @description The number of search requests per second. You are charged based on the number of search requests per second in the earlier billing model.
     *
     * @example 5
     *
     * @var int
     */
    public $qps;

    /**
     * @description The specifications of the application. Valid values:
     *
     *   opensearch.share.junior: basic
     *   opensearch.share.common: shared general-purpose
     *   opensearch.share.compute: shared computing
     *   opensearch.share.storage: shared storage
     *   opensearch.private.common: exclusive general-purpose
     *   opensearch.private.compute: exclusive computing
     *   opensearch.private.storage: exclusive storage
     *
     * @example opensearch.share.common
     *
     * @var string
     */
    public $spec;
    protected $_name = [
        'computeResource' => 'computeResource',
        'docSize'         => 'docSize',
        'qps'             => 'qps',
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
        if (null !== $this->qps) {
            $res['qps'] = $this->qps;
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
        if (isset($map['qps'])) {
            $model->qps = $map['qps'];
        }
        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        return $model;
    }
}
