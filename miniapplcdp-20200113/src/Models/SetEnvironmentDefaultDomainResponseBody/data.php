<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\SetEnvironmentDefaultDomainResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $configChanged;

    /**
     * @var string
     */
    public $defaultMasterDomain;

    /**
     * @var string
     */
    public $defaultStaticDomain;

    /**
     * @var string
     */
    public $masterDomain;

    /**
     * @var bool
     */
    public $masterDomainApplied;

    /**
     * @var string
     */
    public $staticDomain;

    /**
     * @var bool
     */
    public $staticDomainApplied;
    protected $_name = [
        'configChanged'       => 'ConfigChanged',
        'defaultMasterDomain' => 'DefaultMasterDomain',
        'defaultStaticDomain' => 'DefaultStaticDomain',
        'masterDomain'        => 'MasterDomain',
        'masterDomainApplied' => 'MasterDomainApplied',
        'staticDomain'        => 'StaticDomain',
        'staticDomainApplied' => 'StaticDomainApplied',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configChanged) {
            $res['ConfigChanged'] = $this->configChanged;
        }
        if (null !== $this->defaultMasterDomain) {
            $res['DefaultMasterDomain'] = $this->defaultMasterDomain;
        }
        if (null !== $this->defaultStaticDomain) {
            $res['DefaultStaticDomain'] = $this->defaultStaticDomain;
        }
        if (null !== $this->masterDomain) {
            $res['MasterDomain'] = $this->masterDomain;
        }
        if (null !== $this->masterDomainApplied) {
            $res['MasterDomainApplied'] = $this->masterDomainApplied;
        }
        if (null !== $this->staticDomain) {
            $res['StaticDomain'] = $this->staticDomain;
        }
        if (null !== $this->staticDomainApplied) {
            $res['StaticDomainApplied'] = $this->staticDomainApplied;
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
        if (isset($map['ConfigChanged'])) {
            $model->configChanged = $map['ConfigChanged'];
        }
        if (isset($map['DefaultMasterDomain'])) {
            $model->defaultMasterDomain = $map['DefaultMasterDomain'];
        }
        if (isset($map['DefaultStaticDomain'])) {
            $model->defaultStaticDomain = $map['DefaultStaticDomain'];
        }
        if (isset($map['MasterDomain'])) {
            $model->masterDomain = $map['MasterDomain'];
        }
        if (isset($map['MasterDomainApplied'])) {
            $model->masterDomainApplied = $map['MasterDomainApplied'];
        }
        if (isset($map['StaticDomain'])) {
            $model->staticDomain = $map['StaticDomain'];
        }
        if (isset($map['StaticDomainApplied'])) {
            $model->staticDomainApplied = $map['StaticDomainApplied'];
        }

        return $model;
    }
}
