<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class DeleteTranscodeTemplateGroupResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $nonExistTranscodeTemplateIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'nonExistTranscodeTemplateIds' => 'NonExistTranscodeTemplateIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->nonExistTranscodeTemplateIds)) {
            Model::validateArray($this->nonExistTranscodeTemplateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonExistTranscodeTemplateIds) {
            if (\is_array($this->nonExistTranscodeTemplateIds)) {
                $res['NonExistTranscodeTemplateIds'] = [];
                $n1 = 0;
                foreach ($this->nonExistTranscodeTemplateIds as $item1) {
                    $res['NonExistTranscodeTemplateIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['NonExistTranscodeTemplateIds'])) {
            if (!empty($map['NonExistTranscodeTemplateIds'])) {
                $model->nonExistTranscodeTemplateIds = [];
                $n1 = 0;
                foreach ($map['NonExistTranscodeTemplateIds'] as $item1) {
                    $model->nonExistTranscodeTemplateIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
