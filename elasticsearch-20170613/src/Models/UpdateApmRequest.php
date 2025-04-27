<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class UpdateApmRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $outputES;

    /**
     * @var string
     */
    public $outputESPassword;

    /**
     * @var string
     */
    public $outputESUserName;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'description' => 'description',
        'outputES' => 'outputES',
        'outputESPassword' => 'outputESPassword',
        'outputESUserName' => 'outputESUserName',
        'token' => 'token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
