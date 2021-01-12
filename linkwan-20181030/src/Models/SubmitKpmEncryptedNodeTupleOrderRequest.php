<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LinkWAN\V20181030\Models;

use AlibabaCloud\Tea\Model;

class SubmitKpmEncryptedNodeTupleOrderRequest extends Model
{
    /**
     * @var string
     */
    public $apiProduct;

    /**
     * @var string
     */
    public $apiRevision;

    /**
     * @var string
     */
    public $loraVersion;

    /**
     * @var int
     */
    public $requiredCount;
    protected $_name = [
        'apiProduct'    => 'ApiProduct',
        'apiRevision'   => 'ApiRevision',
        'loraVersion'   => 'LoraVersion',
        'requiredCount' => 'RequiredCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiProduct) {
            $res['ApiProduct'] = $this->apiProduct;
        }
        if (null !== $this->apiRevision) {
            $res['ApiRevision'] = $this->apiRevision;
        }
        if (null !== $this->loraVersion) {
            $res['LoraVersion'] = $this->loraVersion;
        }
        if (null !== $this->requiredCount) {
            $res['RequiredCount'] = $this->requiredCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitKpmEncryptedNodeTupleOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiProduct'])) {
            $model->apiProduct = $map['ApiProduct'];
        }
        if (isset($map['ApiRevision'])) {
            $model->apiRevision = $map['ApiRevision'];
        }
        if (isset($map['LoraVersion'])) {
            $model->loraVersion = $map['LoraVersion'];
        }
        if (isset($map['RequiredCount'])) {
            $model->requiredCount = $map['RequiredCount'];
        }

        return $model;
    }
}
