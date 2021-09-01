<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DesensitizeDataResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $desensitizeData;
    protected $_name = [
        'requestId'       => 'RequestId',
        'desensitizeData' => 'DesensitizeData',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('desensitizeData', $this->desensitizeData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->desensitizeData) {
            $res['DesensitizeData'] = $this->desensitizeData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DesensitizeDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DesensitizeData'])) {
            $model->desensitizeData = $map['DesensitizeData'];
        }

        return $model;
    }
}
