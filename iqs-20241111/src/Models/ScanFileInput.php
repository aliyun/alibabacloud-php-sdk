<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class ScanFileInput extends Model
{
    /**
     * @var string
     */
    public $imageBase64;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var ScanFileInputConfig
     */
    public $scanFileInputConfig;
    protected $_name = [
        'imageBase64' => 'imageBase64',
        'imageUrl' => 'imageUrl',
        'scanFileInputConfig' => 'scanFileInputConfig',
    ];

    public function validate()
    {
        if (null !== $this->scanFileInputConfig) {
            $this->scanFileInputConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageBase64) {
            $res['imageBase64'] = $this->imageBase64;
        }

        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }

        if (null !== $this->scanFileInputConfig) {
            $res['scanFileInputConfig'] = null !== $this->scanFileInputConfig ? $this->scanFileInputConfig->toArray($noStream) : $this->scanFileInputConfig;
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
        if (isset($map['imageBase64'])) {
            $model->imageBase64 = $map['imageBase64'];
        }

        if (isset($map['imageUrl'])) {
            $model->imageUrl = $map['imageUrl'];
        }

        if (isset($map['scanFileInputConfig'])) {
            $model->scanFileInputConfig = ScanFileInputConfig::fromMap($map['scanFileInputConfig']);
        }

        return $model;
    }
}
