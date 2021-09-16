<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListLetterSendJobRequest extends Model
{
    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $toAddress;

    /**
     * @var string
     */
    public $detectionId;
    protected $_name = [
        'templateId'  => 'TemplateId',
        'toAddress'   => 'ToAddress',
        'detectionId' => 'DetectionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->toAddress) {
            $res['ToAddress'] = $this->toAddress;
        }
        if (null !== $this->detectionId) {
            $res['DetectionId'] = $this->detectionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLetterSendJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['ToAddress'])) {
            $model->toAddress = $map['ToAddress'];
        }
        if (isset($map['DetectionId'])) {
            $model->detectionId = $map['DetectionId'];
        }

        return $model;
    }
}
