<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class QueryClusterSpecificationRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $connectType;
    /**
     * @var string
     */
    public $mseVersion;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'connectType'    => 'ConnectType',
        'mseVersion'     => 'MseVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->connectType) {
            $res['ConnectType'] = $this->connectType;
        }

        if (null !== $this->mseVersion) {
            $res['MseVersion'] = $this->mseVersion;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['ConnectType'])) {
            $model->connectType = $map['ConnectType'];
        }

        if (isset($map['MseVersion'])) {
            $model->mseVersion = $map['MseVersion'];
        }

        return $model;
    }
}
