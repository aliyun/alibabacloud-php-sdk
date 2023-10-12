<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ScriptRule extends Model
{
    /**
     * @var string
     */
    public $arch;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'arch'     => 'Arch',
        'domain'   => 'Domain',
        'model'    => 'Model',
        'os'       => 'Os',
        'role'     => 'Role',
        'ruleId'   => 'RuleId',
        'scriptId' => 'ScriptId',
        'vendor'   => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->arch) {
            $res['Arch'] = $this->arch;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScriptRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Arch'])) {
            $model->arch = $map['Arch'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
