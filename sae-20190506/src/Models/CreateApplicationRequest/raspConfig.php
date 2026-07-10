<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationRequest;

use AlibabaCloud\Dara\Model;

class raspConfig extends Model
{
    /**
     * @var bool
     */
    public $enableRasp;

    /**
     * @var string
     */
    public $raspAppKey;

    /**
     * @var string
     */
    public $raspAppName;
    protected $_name = [
        'enableRasp' => 'EnableRasp',
        'raspAppKey' => 'RaspAppKey',
        'raspAppName' => 'RaspAppName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableRasp) {
            $res['EnableRasp'] = $this->enableRasp;
        }

        if (null !== $this->raspAppKey) {
            $res['RaspAppKey'] = $this->raspAppKey;
        }

        if (null !== $this->raspAppName) {
            $res['RaspAppName'] = $this->raspAppName;
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
        if (isset($map['EnableRasp'])) {
            $model->enableRasp = $map['EnableRasp'];
        }

        if (isset($map['RaspAppKey'])) {
            $model->raspAppKey = $map['RaspAppKey'];
        }

        if (isset($map['RaspAppName'])) {
            $model->raspAppName = $map['RaspAppName'];
        }

        return $model;
    }
}
