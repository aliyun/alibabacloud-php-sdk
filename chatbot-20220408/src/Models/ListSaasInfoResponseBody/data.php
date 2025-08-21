<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSaasInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $enName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $serviceUrl;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'code' => 'Code',
        'enName' => 'EnName',
        'name' => 'Name',
        'serviceUrl' => 'ServiceUrl',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->enName) {
            $res['EnName'] = $this->enName;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->serviceUrl) {
            $res['ServiceUrl'] = $this->serviceUrl;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['EnName'])) {
            $model->enName = $map['EnName'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ServiceUrl'])) {
            $model->serviceUrl = $map['ServiceUrl'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
