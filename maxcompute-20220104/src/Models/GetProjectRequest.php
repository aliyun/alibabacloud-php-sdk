<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class GetProjectRequest extends Model
{
    /**
     * @var bool
     */
    public $verbose;

    /**
     * @var bool
     */
    public $withQuotaProductType;

    /**
     * @var bool
     */
    public $withStorageTierInfo;
    protected $_name = [
        'verbose' => 'verbose',
        'withQuotaProductType' => 'withQuotaProductType',
        'withStorageTierInfo' => 'withStorageTierInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->verbose) {
            $res['verbose'] = $this->verbose;
        }

        if (null !== $this->withQuotaProductType) {
            $res['withQuotaProductType'] = $this->withQuotaProductType;
        }

        if (null !== $this->withStorageTierInfo) {
            $res['withStorageTierInfo'] = $this->withStorageTierInfo;
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
        if (isset($map['verbose'])) {
            $model->verbose = $map['verbose'];
        }

        if (isset($map['withQuotaProductType'])) {
            $model->withQuotaProductType = $map['withQuotaProductType'];
        }

        if (isset($map['withStorageTierInfo'])) {
            $model->withStorageTierInfo = $map['withStorageTierInfo'];
        }

        return $model;
    }
}
