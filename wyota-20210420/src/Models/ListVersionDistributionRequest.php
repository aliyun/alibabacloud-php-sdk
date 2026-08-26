<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class ListVersionDistributionRequest extends Model
{
    /**
     * @var int
     */
    public $clientType;

    /**
     * @var bool
     */
    public $inManage;

    /**
     * @var string
     */
    public $mainBizType;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $versionType;
    protected $_name = [
        'clientType' => 'ClientType',
        'inManage' => 'InManage',
        'mainBizType' => 'MainBizType',
        'model' => 'Model',
        'versionType' => 'VersionType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }

        if (null !== $this->inManage) {
            $res['InManage'] = $this->inManage;
        }

        if (null !== $this->mainBizType) {
            $res['MainBizType'] = $this->mainBizType;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
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
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }

        if (isset($map['InManage'])) {
            $model->inManage = $map['InManage'];
        }

        if (isset($map['MainBizType'])) {
            $model->mainBizType = $map['MainBizType'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }

        return $model;
    }
}
