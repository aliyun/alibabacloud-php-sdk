<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest;

use AlibabaCloud\Dara\Model;

class outputConfig extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var int
     */
    public $height;
    /**
     * @var int
     */
    public $maxDuration;
    /**
     * @var bool
     */
    public $saveToGeneratedContent;
    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'count'                  => 'Count',
        'fileName'               => 'FileName',
        'height'                 => 'Height',
        'maxDuration'            => 'MaxDuration',
        'saveToGeneratedContent' => 'SaveToGeneratedContent',
        'width'                  => 'Width',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }

        if (null !== $this->maxDuration) {
            $res['MaxDuration'] = $this->maxDuration;
        }

        if (null !== $this->saveToGeneratedContent) {
            $res['SaveToGeneratedContent'] = $this->saveToGeneratedContent;
        }

        if (null !== $this->width) {
            $res['Width'] = $this->width;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }

        if (isset($map['MaxDuration'])) {
            $model->maxDuration = $map['MaxDuration'];
        }

        if (isset($map['SaveToGeneratedContent'])) {
            $model->saveToGeneratedContent = $map['SaveToGeneratedContent'];
        }

        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
