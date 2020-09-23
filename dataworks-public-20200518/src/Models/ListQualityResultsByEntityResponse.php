<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\ListQualityResultsByEntityResponse\qualityResults;
use AlibabaCloud\Tea\Model;

class ListQualityResultsByEntityResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var qualityResults
     */
    public $qualityResults;
    protected $_name = [
        'requestId'      => 'RequestId',
        'qualityResults' => 'QualityResults',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('qualityResults', $this->qualityResults, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->qualityResults) {
            $res['QualityResults'] = null !== $this->qualityResults ? $this->qualityResults->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQualityResultsByEntityResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['QualityResults'])) {
            $model->qualityResults = qualityResults::fromMap($map['QualityResults']);
        }

        return $model;
    }
}
