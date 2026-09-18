<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody\items\scaComponent\license;

use AlibabaCloud\Dara\Model;

class detected extends Model
{
    /**
     * @var bool
     */
    public $isFsfLibre;

    /**
     * @var bool
     */
    public $isOsiApproved;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $spdxId;
    protected $_name = [
        'isFsfLibre' => 'isFsfLibre',
        'isOsiApproved' => 'isOsiApproved',
        'name' => 'name',
        'spdxId' => 'spdxId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isFsfLibre) {
            $res['isFsfLibre'] = $this->isFsfLibre;
        }

        if (null !== $this->isOsiApproved) {
            $res['isOsiApproved'] = $this->isOsiApproved;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->spdxId) {
            $res['spdxId'] = $this->spdxId;
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
        if (isset($map['isFsfLibre'])) {
            $model->isFsfLibre = $map['isFsfLibre'];
        }

        if (isset($map['isOsiApproved'])) {
            $model->isOsiApproved = $map['isOsiApproved'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['spdxId'])) {
            $model->spdxId = $map['spdxId'];
        }

        return $model;
    }
}
