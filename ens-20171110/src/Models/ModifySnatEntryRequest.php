<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifySnatEntryRequest extends Model
{
    /**
     * @var bool
     */
    public $eipAffinity;

    /**
     * @example true
     *
     * @var bool
     */
    public $ispAffinity;

    /**
     * @description This parameter is required.
     *
     * @example snat-5tfjp36fsrb36zs36faj0****
     *
     * @var string
     */
    public $snatEntryId;

    /**
     * @example test0
     *
     * @var string
     */
    public $snatEntryName;

    /**
     * @var string
     */
    public $snatIp;
    protected $_name = [
        'eipAffinity' => 'EipAffinity',
        'ispAffinity' => 'IspAffinity',
        'snatEntryId' => 'SnatEntryId',
        'snatEntryName' => 'SnatEntryName',
        'snatIp' => 'SnatIp',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipAffinity) {
            $res['EipAffinity'] = $this->eipAffinity;
        }
        if (null !== $this->ispAffinity) {
            $res['IspAffinity'] = $this->ispAffinity;
        }
        if (null !== $this->snatEntryId) {
            $res['SnatEntryId'] = $this->snatEntryId;
        }
        if (null !== $this->snatEntryName) {
            $res['SnatEntryName'] = $this->snatEntryName;
        }
        if (null !== $this->snatIp) {
            $res['SnatIp'] = $this->snatIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySnatEntryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipAffinity'])) {
            $model->eipAffinity = $map['EipAffinity'];
        }
        if (isset($map['IspAffinity'])) {
            $model->ispAffinity = $map['IspAffinity'];
        }
        if (isset($map['SnatEntryId'])) {
            $model->snatEntryId = $map['SnatEntryId'];
        }
        if (isset($map['SnatEntryName'])) {
            $model->snatEntryName = $map['SnatEntryName'];
        }
        if (isset($map['SnatIp'])) {
            $model->snatIp = $map['SnatIp'];
        }

        return $model;
    }
}
