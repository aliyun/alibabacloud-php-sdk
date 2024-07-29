<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models\CreateAccountRequest;

use AlibabaCloud\Tea\Model;

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
     * @example true
     *
     * @var bool
     */
    public $ddlAuthority;

    /**
     * @example 0
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowDatabases) {
            $res['AllowDatabases'] = $this->allowDatabases;
        }
        if (null !== $this->allowDictionaries) {
            $res['AllowDictionaries'] = $this->allowDictionaries;
        }
        if (null !== $this->ddlAuthority) {
            $res['DdlAuthority'] = $this->ddlAuthority;
        }
        if (null !== $this->dmlAuthority) {
            $res['DmlAuthority'] = $this->dmlAuthority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dmlAuthSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowDatabases'])) {
            if (!empty($map['AllowDatabases'])) {
                $model->allowDatabases = $map['AllowDatabases'];
            }
        }
        if (isset($map['AllowDictionaries'])) {
            if (!empty($map['AllowDictionaries'])) {
                $model->allowDictionaries = $map['AllowDictionaries'];
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
