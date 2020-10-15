<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsResponse\ensRegions;
use AlibabaCloud\Tea\Model;

class DescribeEnsRegionsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $code;

    /**
     * @var ensRegions
     */
    public $ensRegions;
    protected $_name = [
        'requestId'  => 'RequestId',
        'code'       => 'Code',
        'ensRegions' => 'EnsRegions',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('ensRegions', $this->ensRegions, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->ensRegions) {
            $res['EnsRegions'] = null !== $this->ensRegions ? $this->ensRegions->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsRegionsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EnsRegions'])) {
            $model->ensRegions = ensRegions::fromMap($map['EnsRegions']);
        }

        return $model;
    }
}
