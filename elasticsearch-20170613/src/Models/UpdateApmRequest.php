<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UpdateApmRequest extends Model
{
    /**
     * @example APMtest
     *
     * @var string
     */
    public $description;

    /**
     * @example es-cn-i7m2fsfhc001x****
     *
     * @var string
     */
    public $outputES;

    /**
     * @example ESPassword****
     *
     * @var string
     */
    public $outputESPassword;

    /**
     * @example elastic
     *
     * @var string
     */
    public $outputESUserName;

    /**
     * @example AMPPassword****
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'description'      => 'description',
        'outputES'         => 'outputES',
        'outputESPassword' => 'outputESPassword',
        'outputESUserName' => 'outputESUserName',
        'token'            => 'token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->outputES) {
            $res['outputES'] = $this->outputES;
        }
        if (null !== $this->outputESPassword) {
            $res['outputESPassword'] = $this->outputESPassword;
        }
        if (null !== $this->outputESUserName) {
            $res['outputESUserName'] = $this->outputESUserName;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateApmRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['outputES'])) {
            $model->outputES = $map['outputES'];
        }
        if (isset($map['outputESPassword'])) {
            $model->outputESPassword = $map['outputESPassword'];
        }
        if (isset($map['outputESUserName'])) {
            $model->outputESUserName = $map['outputESUserName'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
