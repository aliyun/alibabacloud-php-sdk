<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\GetTranslateImageBatchResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $code;

    /**
     * @var string
     */
    public $finalImageUrl;

    /**
     * @var string
     */
    public $inPaintingUrl;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $sourceImageUrl;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $templateJson;
    protected $_name = [
        'code'           => 'Code',
        'finalImageUrl'  => 'FinalImageUrl',
        'inPaintingUrl'  => 'InPaintingUrl',
        'message'        => 'Message',
        'sourceImageUrl' => 'SourceImageUrl',
        'success'        => 'Success',
        'templateJson'   => 'TemplateJson',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->finalImageUrl) {
            $res['FinalImageUrl'] = $this->finalImageUrl;
        }
        if (null !== $this->inPaintingUrl) {
            $res['InPaintingUrl'] = $this->inPaintingUrl;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->sourceImageUrl) {
            $res['SourceImageUrl'] = $this->sourceImageUrl;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->templateJson) {
            $res['TemplateJson'] = $this->templateJson;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FinalImageUrl'])) {
            $model->finalImageUrl = $map['FinalImageUrl'];
        }
        if (isset($map['InPaintingUrl'])) {
            $model->inPaintingUrl = $map['InPaintingUrl'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['SourceImageUrl'])) {
            $model->sourceImageUrl = $map['SourceImageUrl'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TemplateJson'])) {
            $model->templateJson = $map['TemplateJson'];
        }

        return $model;
    }
}
