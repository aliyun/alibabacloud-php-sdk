<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetRumSymbolFileParamsResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $formData;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'formData' => 'formData',
        'requestId' => 'requestId',
        'uploadUrl' => 'uploadUrl',
    ];

    public function validate()
    {
        if (\is_array($this->formData)) {
            Model::validateArray($this->formData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->formData) {
            if (\is_array($this->formData)) {
                $res['formData'] = [];
                foreach ($this->formData as $key1 => $value1) {
                    $res['formData'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->uploadUrl) {
            $res['uploadUrl'] = $this->uploadUrl;
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
        if (isset($map['formData'])) {
            if (!empty($map['formData'])) {
                $model->formData = [];
                foreach ($map['formData'] as $key1 => $value1) {
                    $model->formData[$key1] = $value1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['uploadUrl'])) {
            $model->uploadUrl = $map['uploadUrl'];
        }

        return $model;
    }
}
