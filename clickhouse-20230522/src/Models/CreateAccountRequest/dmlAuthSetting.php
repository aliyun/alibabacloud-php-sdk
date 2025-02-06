<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateAccountRequest;

use AlibabaCloud\Dara\Model;

class dmlAuthSetting extends Model
{
    /**
     * @var string[]
     */
    public $allowDatabases;
    /**
     * @var string[]
     */
    public $allowDictionaries;
    /**
     * @var bool
     */
    public $ddlAuthority;
    /**
     * @var int
     */
    public $dmlAuthority;
    protected $_name = [
        'allowDatabases'    => 'AllowDatabases',
        'allowDictionaries' => 'AllowDictionaries',
        'ddlAuthority'      => 'DdlAuthority',
        'dmlAuthority'      => 'DmlAuthority',
    ];

    public function validate()
    {
        if (\is_array($this->allowDatabases)) {
            Model::validateArray($this->allowDatabases);
        }
        if (\is_array($this->allowDictionaries)) {
            Model::validateArray($this->allowDictionaries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowDatabases) {
            if (\is_array($this->allowDatabases)) {
                $res['AllowDatabases'] = [];
                $n1                    = 0;
                foreach ($this->allowDatabases as $item1) {
                    $res['AllowDatabases'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->allowDictionaries) {
            if (\is_array($this->allowDictionaries)) {
                $res['AllowDictionaries'] = [];
                $n1                       = 0;
                foreach ($this->allowDictionaries as $item1) {
                    $res['AllowDictionaries'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ddlAuthority) {
            $res['DdlAuthority'] = $this->ddlAuthority;
        }

        if (null !== $this->dmlAuthority) {
            $res['DmlAuthority'] = $this->dmlAuthority;
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
        if (isset($map['AllowDatabases'])) {
            if (!empty($map['AllowDatabases'])) {
                $model->allowDatabases = [];
                $n1                    = 0;
                foreach ($map['AllowDatabases'] as $item1) {
                    $model->allowDatabases[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AllowDictionaries'])) {
            if (!empty($map['AllowDictionaries'])) {
                $model->allowDictionaries = [];
                $n1                       = 0;
                foreach ($map['AllowDictionaries'] as $item1) {
                    $model->allowDictionaries[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DdlAuthority'])) {
            $model->ddlAuthority = $map['DdlAuthority'];
        }

        if (isset($map['DmlAuthority'])) {
            $model->dmlAuthority = $map['DmlAuthority'];
        }

        return $model;
    }
}
