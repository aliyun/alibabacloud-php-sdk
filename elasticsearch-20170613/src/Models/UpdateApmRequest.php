<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class UpdateApmRequest extends Model
{
    /**
     * @var string
     */
    public $outputES;

    /**
     * @var string
     */
    public $outputESUserName;

    /**
     * @var string
     */
    public $outputESPassword;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $yml;
    protected $_name = [
        'outputES'         => 'outputES',
        'outputESUserName' => 'outputESUserName',
        'outputESPassword' => 'outputESPassword',
        'token'            => 'token',
        'yml'              => 'yml',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputES) {
            $res['outputES'] = $this->outputES;
        }
        if (null !== $this->outputESUserName) {
            $res['outputESUserName'] = $this->outputESUserName;
        }
        if (null !== $this->outputESPassword) {
            $res['outputESPassword'] = $this->outputESPassword;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }
        if (null !== $this->yml) {
            $res['yml'] = $this->yml;
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
        if (isset($map['outputES'])) {
            $model->outputES = $map['outputES'];
        }
        if (isset($map['outputESUserName'])) {
            $model->outputESUserName = $map['outputESUserName'];
        }
        if (isset($map['outputESPassword'])) {
            $model->outputESPassword = $map['outputESPassword'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }
        if (isset($map['yml'])) {
            $model->yml = $map['yml'];
        }

        return $model;
    }
}
