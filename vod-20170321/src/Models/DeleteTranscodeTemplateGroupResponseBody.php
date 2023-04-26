<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteTranscodeTemplateGroupResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $nonExistTranscodeTemplateIds;

    /**
     * @example 25818875-5F78-4A*****F6-D7393642CA58
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nonExistTranscodeTemplateIds' => 'NonExistTranscodeTemplateIds',
        'requestId'                    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonExistTranscodeTemplateIds) {
            $res['NonExistTranscodeTemplateIds'] = $this->nonExistTranscodeTemplateIds;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteTranscodeTemplateGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonExistTranscodeTemplateIds'])) {
            if (!empty($map['NonExistTranscodeTemplateIds'])) {
                $model->nonExistTranscodeTemplateIds = $map['NonExistTranscodeTemplateIds'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
