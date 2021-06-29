<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\Tea\Model;

class CreateFilePredictRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmCode;

    /**
     * @var string
     */
    public $resourceUrl;

    /**
     * @var string
     */
    public $pushConfig;

    /**
     * @var string
     */
    public $decryptConfig;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $outputOss;

    /**
     * @var string
     */
    public $outputRegion;
    protected $_name = [
        'algorithmCode' => 'AlgorithmCode',
        'resourceUrl'   => 'ResourceUrl',
        'pushConfig'    => 'PushConfig',
        'decryptConfig' => 'DecryptConfig',
        'clientToken'   => 'ClientToken',
        'outputOss'     => 'OutputOss',
        'outputRegion'  => 'OutputRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmCode) {
            $res['AlgorithmCode'] = $this->algorithmCode;
        }
        if (null !== $this->resourceUrl) {
            $res['ResourceUrl'] = $this->resourceUrl;
        }
        if (null !== $this->pushConfig) {
            $res['PushConfig'] = $this->pushConfig;
        }
        if (null !== $this->decryptConfig) {
            $res['DecryptConfig'] = $this->decryptConfig;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->outputOss) {
            $res['OutputOss'] = $this->outputOss;
        }
        if (null !== $this->outputRegion) {
            $res['OutputRegion'] = $this->outputRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFilePredictRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmCode'])) {
            $model->algorithmCode = $map['AlgorithmCode'];
        }
        if (isset($map['ResourceUrl'])) {
            $model->resourceUrl = $map['ResourceUrl'];
        }
        if (isset($map['PushConfig'])) {
            $model->pushConfig = $map['PushConfig'];
        }
        if (isset($map['DecryptConfig'])) {
            $model->decryptConfig = $map['DecryptConfig'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OutputOss'])) {
            $model->outputOss = $map['OutputOss'];
        }
        if (isset($map['OutputRegion'])) {
            $model->outputRegion = $map['OutputRegion'];
        }

        return $model;
    }
}
