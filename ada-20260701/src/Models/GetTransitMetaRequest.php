<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701\Models;

use AlibabaCloud\Dara\Model;

class GetTransitMetaRequest extends Model
{
    /**
     * @var int
     */
    public $expireMs;

    /**
     * @var string
     */
    public $filePath;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $transitId;
    protected $_name = [
        'expireMs' => 'ExpireMs',
        'filePath' => 'FilePath',
        'network' => 'Network',
        'transitId' => 'TransitId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expireMs) {
            $res['ExpireMs'] = $this->expireMs;
        }

        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }

        if (null !== $this->transitId) {
            $res['TransitId'] = $this->transitId;
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
        if (isset($map['ExpireMs'])) {
            $model->expireMs = $map['ExpireMs'];
        }

        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }

        if (isset($map['TransitId'])) {
            $model->transitId = $map['TransitId'];
        }

        return $model;
    }
}
