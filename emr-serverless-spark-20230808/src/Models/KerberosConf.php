<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class KerberosConf extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $kerberosConfId;

    /**
     * @var string[]
     */
    public $keytabs;

    /**
     * @var string
     */
    public $krb5Conf;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkServiceId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'creator' => 'creator',
        'enabled' => 'enabled',
        'gmtCreated' => 'gmtCreated',
        'gmtModified' => 'gmtModified',
        'kerberosConfId' => 'kerberosConfId',
        'keytabs' => 'keytabs',
        'krb5Conf' => 'krb5Conf',
        'name' => 'name',
        'networkServiceId' => 'networkServiceId',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->keytabs)) {
            Model::validateArray($this->keytabs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->gmtCreated) {
            $res['gmtCreated'] = $this->gmtCreated;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->kerberosConfId) {
            $res['kerberosConfId'] = $this->kerberosConfId;
        }

        if (null !== $this->keytabs) {
            if (\is_array($this->keytabs)) {
                $res['keytabs'] = [];
                $n1 = 0;
                foreach ($this->keytabs as $item1) {
                    $res['keytabs'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->krb5Conf) {
            $res['krb5Conf'] = $this->krb5Conf;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->networkServiceId) {
            $res['networkServiceId'] = $this->networkServiceId;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['gmtCreated'])) {
            $model->gmtCreated = $map['gmtCreated'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['kerberosConfId'])) {
            $model->kerberosConfId = $map['kerberosConfId'];
        }

        if (isset($map['keytabs'])) {
            if (!empty($map['keytabs'])) {
                $model->keytabs = [];
                $n1 = 0;
                foreach ($map['keytabs'] as $item1) {
                    $model->keytabs[$n1++] = $item1;
                }
            }
        }

        if (isset($map['krb5Conf'])) {
            $model->krb5Conf = $map['krb5Conf'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['networkServiceId'])) {
            $model->networkServiceId = $map['networkServiceId'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
