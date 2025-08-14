<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DeleteSecurityProxyRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $proxyId;

    /**
     * @var string
     */
    public $trimSql;
    protected $_name = [
        'lang' => 'Lang',
        'proxyId' => 'ProxyId',
        'trimSql' => 'trimSql',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->proxyId) {
            $res['ProxyId'] = $this->proxyId;
        }

        if (null !== $this->trimSql) {
            $res['trimSql'] = $this->trimSql;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['ProxyId'])) {
            $model->proxyId = $map['ProxyId'];
        }

        if (isset($map['trimSql'])) {
            $model->trimSql = $map['trimSql'];
        }

        return $model;
    }
}
