<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\QueryConfigResponseBody\data\nacosRunningEnv\fencePolicy;

class nacosRunningEnv extends Model
{
    /**
     * @var bool
     */
    public $emptyProtect;

    /**
     * @var bool
     */
    public $fenceEnabled;

    /**
     * @var fencePolicy
     */
    public $fencePolicy;

    /**
     * @var string
     */
    public $grayAuth;
    protected $_name = [
        'emptyProtect' => 'emptyProtect',
        'fenceEnabled' => 'fenceEnabled',
        'fencePolicy' => 'fencePolicy',
        'grayAuth' => 'grayAuth',
    ];

    public function validate()
    {
        if (null !== $this->fencePolicy) {
            $this->fencePolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->emptyProtect) {
            $res['emptyProtect'] = $this->emptyProtect;
        }

        if (null !== $this->fenceEnabled) {
            $res['fenceEnabled'] = $this->fenceEnabled;
        }

        if (null !== $this->fencePolicy) {
            $res['fencePolicy'] = null !== $this->fencePolicy ? $this->fencePolicy->toArray($noStream) : $this->fencePolicy;
        }

        if (null !== $this->grayAuth) {
            $res['grayAuth'] = $this->grayAuth;
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
        if (isset($map['emptyProtect'])) {
            $model->emptyProtect = $map['emptyProtect'];
        }

        if (isset($map['fenceEnabled'])) {
            $model->fenceEnabled = $map['fenceEnabled'];
        }

        if (isset($map['fencePolicy'])) {
            $model->fencePolicy = fencePolicy::fromMap($map['fencePolicy']);
        }

        if (isset($map['grayAuth'])) {
            $model->grayAuth = $map['grayAuth'];
        }

        return $model;
    }
}
