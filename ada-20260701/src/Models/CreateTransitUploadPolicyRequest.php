<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701\Models;

use AlibabaCloud\Dara\Model;

class CreateTransitUploadPolicyRequest extends Model
{
    /**
     * @var int
     */
    public $expireMs;

    /**
     * @var string
     */
    public $fileShowName;

    /**
     * @var string
     */
    public $network;

    /**
     * @var string
     */
    public $pathPrefix;
    protected $_name = [
        'expireMs' => 'ExpireMs',
        'fileShowName' => 'FileShowName',
        'network' => 'Network',
        'pathPrefix' => 'PathPrefix',
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

        if (null !== $this->fileShowName) {
            $res['FileShowName'] = $this->fileShowName;
        }

        if (null !== $this->network) {
            $res['Network'] = $this->network;
        }

        if (null !== $this->pathPrefix) {
            $res['PathPrefix'] = $this->pathPrefix;
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

        if (isset($map['FileShowName'])) {
            $model->fileShowName = $map['FileShowName'];
        }

        if (isset($map['Network'])) {
            $model->network = $map['Network'];
        }

        if (isset($map['PathPrefix'])) {
            $model->pathPrefix = $map['PathPrefix'];
        }

        return $model;
    }
}
