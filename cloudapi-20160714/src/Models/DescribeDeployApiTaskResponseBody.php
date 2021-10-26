<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployApiTaskResponseBody\deployedResults;
use AlibabaCloud\Tea\Model;

class DescribeDeployApiTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var deployedResults
     */
    public $deployedResults;
    protected $_name = [
        'requestId'       => 'RequestId',
        'deployedResults' => 'DeployedResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->deployedResults) {
            $res['DeployedResults'] = null !== $this->deployedResults ? $this->deployedResults->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeployApiTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DeployedResults'])) {
            $model->deployedResults = deployedResults::fromMap($map['DeployedResults']);
        }

        return $model;
    }
}
