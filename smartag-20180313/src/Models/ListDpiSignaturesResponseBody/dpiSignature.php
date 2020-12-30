<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ListDpiSignaturesResponseBody;

use AlibabaCloud\Tea\Model;

class dpiSignature extends Model
{
    /**
     * @var string
     */
    public $dpiSignatureId;

    /**
     * @var string
     */
    public $minSignatureDbVersion;

    /**
     * @var string
     */
    public $dpiGroupId;

    /**
     * @var string
     */
    public $minEngineVersion;

    /**
     * @var string
     */
    public $dpiSignatureName;
    protected $_name = [
        'dpiSignatureId'        => 'DpiSignatureId',
        'minSignatureDbVersion' => 'MinSignatureDbVersion',
        'dpiGroupId'            => 'DpiGroupId',
        'minEngineVersion'      => 'MinEngineVersion',
        'dpiSignatureName'      => 'DpiSignatureName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dpiSignatureId) {
            $res['DpiSignatureId'] = $this->dpiSignatureId;
        }
        if (null !== $this->minSignatureDbVersion) {
            $res['MinSignatureDbVersion'] = $this->minSignatureDbVersion;
        }
        if (null !== $this->dpiGroupId) {
            $res['DpiGroupId'] = $this->dpiGroupId;
        }
        if (null !== $this->minEngineVersion) {
            $res['MinEngineVersion'] = $this->minEngineVersion;
        }
        if (null !== $this->dpiSignatureName) {
            $res['DpiSignatureName'] = $this->dpiSignatureName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dpiSignature
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DpiSignatureId'])) {
            $model->dpiSignatureId = $map['DpiSignatureId'];
        }
        if (isset($map['MinSignatureDbVersion'])) {
            $model->minSignatureDbVersion = $map['MinSignatureDbVersion'];
        }
        if (isset($map['DpiGroupId'])) {
            $model->dpiGroupId = $map['DpiGroupId'];
        }
        if (isset($map['MinEngineVersion'])) {
            $model->minEngineVersion = $map['MinEngineVersion'];
        }
        if (isset($map['DpiSignatureName'])) {
            $model->dpiSignatureName = $map['DpiSignatureName'];
        }

        return $model;
    }
}
