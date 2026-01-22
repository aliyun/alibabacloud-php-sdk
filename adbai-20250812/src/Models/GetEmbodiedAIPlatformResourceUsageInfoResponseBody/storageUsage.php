<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoResponseBody\storageUsage\nas;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\GetEmbodiedAIPlatformResourceUsageInfoResponseBody\storageUsage\oss;

class storageUsage extends Model
{
    /**
     * @var nas
     */
    public $nas;

    /**
     * @var oss
     */
    public $oss;
    protected $_name = [
        'nas' => 'Nas',
        'oss' => 'Oss',
    ];

    public function validate()
    {
        if (null !== $this->nas) {
            $this->nas->validate();
        }
        if (null !== $this->oss) {
            $this->oss->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nas) {
            $res['Nas'] = null !== $this->nas ? $this->nas->toArray($noStream) : $this->nas;
        }

        if (null !== $this->oss) {
            $res['Oss'] = null !== $this->oss ? $this->oss->toArray($noStream) : $this->oss;
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
        if (isset($map['Nas'])) {
            $model->nas = nas::fromMap($map['Nas']);
        }

        if (isset($map['Oss'])) {
            $model->oss = oss::fromMap($map['Oss']);
        }

        return $model;
    }
}
