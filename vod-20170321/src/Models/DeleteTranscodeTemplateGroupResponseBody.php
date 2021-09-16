<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DeleteTranscodeTemplateGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $nonExistTranscodeTemplateIds;
    protected $_name = [
        'requestId'                    => 'RequestId',
        'nonExistTranscodeTemplateIds' => 'NonExistTranscodeTemplateIds',
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
        if (null !== $this->nonExistTranscodeTemplateIds) {
            $res['NonExistTranscodeTemplateIds'] = $this->nonExistTranscodeTemplateIds;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['NonExistTranscodeTemplateIds'])) {
            if (!empty($map['NonExistTranscodeTemplateIds'])) {
                $model->nonExistTranscodeTemplateIds = $map['NonExistTranscodeTemplateIds'];
            }
        }

        return $model;
    }
}
