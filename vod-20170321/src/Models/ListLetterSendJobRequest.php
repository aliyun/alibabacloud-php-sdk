<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class ListLetterSendJobRequest extends Model
{
    /**
     * @var string
     */
    public $detectionId;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $toAddress;
    protected $_name = [
        'detectionId' => 'DetectionId',
        'templateId'  => 'TemplateId',
        'toAddress'   => 'ToAddress',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->detectionId) {
            $res['DetectionId'] = $this->detectionId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->toAddress) {
            $res['ToAddress'] = $this->toAddress;
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
        if (isset($map['DetectionId'])) {
            $model->detectionId = $map['DetectionId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['ToAddress'])) {
            $model->toAddress = $map['ToAddress'];
        }

        return $model;
    }
}
