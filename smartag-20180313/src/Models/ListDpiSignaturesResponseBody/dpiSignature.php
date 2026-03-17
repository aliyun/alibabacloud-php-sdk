<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiSignaturesResponseBody;

use AlibabaCloud\Dara\Model;

class dpiSignature extends Model
{
    /**
     * @var string
     */
    public $dpiGroupId;

    /**
     * @var string
     */
    public $dpiSignatureId;

    /**
     * @var string
     */
    public $dpiSignatureName;

    /**
     * @var string
     */
    public $minEngineVersion;

    /**
     * @var string
     */
    public $minSignatureDbVersion;
    protected $_name = [
        'dpiGroupId' => 'DpiGroupId',
        'dpiSignatureId' => 'DpiSignatureId',
        'dpiSignatureName' => 'DpiSignatureName',
        'minEngineVersion' => 'MinEngineVersion',
        'minSignatureDbVersion' => 'MinSignatureDbVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dpiGroupId) {
            $res['DpiGroupId'] = $this->dpiGroupId;
        }

        if (null !== $this->dpiSignatureId) {
            $res['DpiSignatureId'] = $this->dpiSignatureId;
        }

        if (null !== $this->dpiSignatureName) {
            $res['DpiSignatureName'] = $this->dpiSignatureName;
        }

        if (null !== $this->minEngineVersion) {
            $res['MinEngineVersion'] = $this->minEngineVersion;
        }

        if (null !== $this->minSignatureDbVersion) {
            $res['MinSignatureDbVersion'] = $this->minSignatureDbVersion;
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
        if (isset($map['DpiGroupId'])) {
            $model->dpiGroupId = $map['DpiGroupId'];
        }

        if (isset($map['DpiSignatureId'])) {
            $model->dpiSignatureId = $map['DpiSignatureId'];
        }

        if (isset($map['DpiSignatureName'])) {
            $model->dpiSignatureName = $map['DpiSignatureName'];
        }

        if (isset($map['MinEngineVersion'])) {
            $model->minEngineVersion = $map['MinEngineVersion'];
        }

        if (isset($map['MinSignatureDbVersion'])) {
            $model->minSignatureDbVersion = $map['MinSignatureDbVersion'];
        }

        return $model;
    }
}
