<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\DescribeCdnDomainResponseBody;

use AlibabaCloud\Tea\Model;

class refererConfig extends Model
{
    /**
     * @example on
     *
     * @var string
     */
    public $allowEmpty;

    /**
     * @example 28048528682****
     *
     * @var string
     */
    public $configId;

    /**
     * @example a*b.example.com
     *
     * @var string
     */
    public $disableAst;

    /**
     * @example a*b.example.com
     *
     * @var string
     */
    public $referList;

    /**
     * @example white
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'allowEmpty' => 'AllowEmpty',
        'configId'   => 'ConfigId',
        'disableAst' => 'DisableAst',
        'referList'  => 'ReferList',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowEmpty) {
            $res['AllowEmpty'] = $this->allowEmpty;
        }
        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }
        if (null !== $this->disableAst) {
            $res['DisableAst'] = $this->disableAst;
        }
        if (null !== $this->referList) {
            $res['ReferList'] = $this->referList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refererConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowEmpty'])) {
            $model->allowEmpty = $map['AllowEmpty'];
        }
        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }
        if (isset($map['DisableAst'])) {
            $model->disableAst = $map['DisableAst'];
        }
        if (isset($map['ReferList'])) {
            $model->referList = $map['ReferList'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
