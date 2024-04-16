<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\CreateDomainResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var bool
     */
    public $applied;

    /**
     * @var bool
     */
    public $checked;

    /**
     * @var string
     */
    public $cname;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $domainType;

    /**
     * @var string
     */
    public $envId;

    /**
     * @var string
     */
    public $path;

    /**
     * @var bool
     */
    public $withCertificate;
    protected $_name = [
        'appId'           => 'AppId',
        'applied'         => 'Applied',
        'checked'         => 'Checked',
        'cname'           => 'Cname',
        'deleted'         => 'Deleted',
        'domain'          => 'Domain',
        'domainType'      => 'DomainType',
        'envId'           => 'EnvId',
        'path'            => 'Path',
        'withCertificate' => 'WithCertificate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->applied) {
            $res['Applied'] = $this->applied;
        }
        if (null !== $this->checked) {
            $res['Checked'] = $this->checked;
        }
        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->domainType) {
            $res['DomainType'] = $this->domainType;
        }
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->withCertificate) {
            $res['WithCertificate'] = $this->withCertificate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Applied'])) {
            $model->applied = $map['Applied'];
        }
        if (isset($map['Checked'])) {
            $model->checked = $map['Checked'];
        }
        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['DomainType'])) {
            $model->domainType = $map['DomainType'];
        }
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['WithCertificate'])) {
            $model->withCertificate = $map['WithCertificate'];
        }

        return $model;
    }
}
