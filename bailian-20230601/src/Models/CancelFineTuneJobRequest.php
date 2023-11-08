<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20230601\Models;

use AlibabaCloud\Tea\Model;

class CancelFineTuneJobRequest extends Model
{
    /**
     * @example ac627989eb4f8a98ed05fd098beee5_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example ft-202307181110-146c93bf
     *
     * @var string
     */
    public $jobId;
    protected $_name = [
        'agentKey' => 'AgentKey',
        'jobId'    => 'JobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelFineTuneJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        return $model;
    }
}
