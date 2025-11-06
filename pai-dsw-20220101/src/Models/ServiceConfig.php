<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

class ServiceConfig extends Model
{
    /**
     * @var string
     */
    public $codeServerAuth;

    /**
     * @var string
     */
    public $codeServerPassword;

    /**
     * @var string
     */
    public $jupyterServerAuth;

    /**
     * @var string
     */
    public $jupyterServerPassword;
    protected $_name = [
        'codeServerAuth' => 'CodeServerAuth',
        'codeServerPassword' => 'CodeServerPassword',
        'jupyterServerAuth' => 'JupyterServerAuth',
        'jupyterServerPassword' => 'JupyterServerPassword',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeServerAuth) {
            $res['CodeServerAuth'] = $this->codeServerAuth;
        }

        if (null !== $this->codeServerPassword) {
            $res['CodeServerPassword'] = $this->codeServerPassword;
        }

        if (null !== $this->jupyterServerAuth) {
            $res['JupyterServerAuth'] = $this->jupyterServerAuth;
        }

        if (null !== $this->jupyterServerPassword) {
            $res['JupyterServerPassword'] = $this->jupyterServerPassword;
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
        if (isset($map['CodeServerAuth'])) {
            $model->codeServerAuth = $map['CodeServerAuth'];
        }

        if (isset($map['CodeServerPassword'])) {
            $model->codeServerPassword = $map['CodeServerPassword'];
        }

        if (isset($map['JupyterServerAuth'])) {
            $model->jupyterServerAuth = $map['JupyterServerAuth'];
        }

        if (isset($map['JupyterServerPassword'])) {
            $model->jupyterServerPassword = $map['JupyterServerPassword'];
        }

        return $model;
    }
}
